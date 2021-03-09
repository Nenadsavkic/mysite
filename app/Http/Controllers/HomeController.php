<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['welcome','contactForm','home']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $user_image = Auth::user()->user_image;


        return view('home',compact('user','user_image'));
    }

    public function welcome()
    {
        return view('welcome');
    }
    public function contactForm(Request $request)
    {

        return view('contactForm');

    }
    public function saveImg(Request $request)
    {
        $request->validate([
            'user_image'=> 'mimes:jpeg,jpg,png'
        ]);


            $image = $request->file('user_image');
            $user_image = time().'.'.$image->extension();
            $image->move(public_path('images/user_image'), $user_image);


            return redirect()->back();

    }

}
