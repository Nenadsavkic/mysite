<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function saveImg(Request $request)
    {

        $request->validate([
            'user_image'=> 'mimes:jpeg,jpg,png'
        ]);

          if($request->hasFile('user_image')){

            $image = $request->file('user_image')->getClientOriginalName();
            $request->user_image->storeAs('images',$image,'public');
            auth()->user()->update(['user_image' => $image]);

          }

            return redirect()->back();

    }
    public function deleteImg($id)
    {

        $image = null;
        Auth::user()->update(['user_image' => $image]);

       return redirect()->back();
    }
}
