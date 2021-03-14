<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
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
        $user_ads = Ad::all()->where('user_id', $user->id);


        return view('home',compact('user','user_image','user_ads'));
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
    public function showAdForm()
    {

        $user = Auth::user();
        $categories = Category::all();

        return view('adForm', compact('user','categories'));
    }


    public function saveAd(Request $request)
    {
        $request->validate([
           'title' => 'required | max:255',
           'body' => 'required',
           'price' => 'required',
           'image1' => 'mimes:jpg,jpeg,png',
           'image2' => 'mimes:jpg,jpeg,png',
           'image3' => 'mimes:jpg,jpeg,png',
           'image4' => 'mimes:jpg,jpeg,png',
           'image5' => 'mimes:jpg,jpeg,png',
           'category' => 'required'
        ]);

        if ($request->hasFile('image1')) {

           $image1 = $request->file('image1');
           $image1_name = time().'1.'.$image1->extension();
           $image1->move(public_path('/images/add_images'), $image1_name);
        }
        if ($request->hasFile('image2')) {

            $image2 = $request->file('image2');
            $image2_name = time().'2.'.$image2->extension();
            $image2->move(public_path('/images/add_images'), $image2_name);
         }
         if ($request->hasFile('image3')) {

            $image3 = $request->file('image3');
            $image3_name = time().'3.'.$image3->extension();
            $image3->move(public_path('/images/add_images'), $image3_name);
         }
         if ($request->hasFile('image4')) {

            $image4 = $request->file('image4');
            $image4_name = time().'4.'.$image4->extension();
            $image4->move(public_path('/images/add_images'), $image4_name);
         }
         if ($request->hasFile('image5')) {

            $image5 = $request->file('image5');
            $image5_name = time().'5.'.$image5->extension();
            $image5->move(public_path('/images/add_images'), $image5_name);
         }

            Ad::create([
              'title' => $request->title,
              'body' => $request->body,
              'price' =>$request->price,
              'image1' => (isset($image1_name)) ? $image1_name : null,
              'image2' => (isset($image2_name)) ? $image2_name : null,
              'image3' => (isset($image3_name)) ? $image3_name : null,
              'image4' => (isset($image4_name)) ? $image4_name : null,
              'image5' => (isset($image5_name)) ? $image5_name : null,
              'user_id' => Auth::user()->id,
              'category_id' => $request->category
         ]);

            return redirect(route('home'));

    }

    public function showSingleAd($id)
    {
      $user = Auth::user();
      $ad = Ad::find($id);
      //dd($ad);
      return view('singleAd', compact('user','ad'));
    }

    public function adDelete($id)
    {
        $ad = Ad::find($id);
        $ad->delete();

        return redirect('home')->with('message', 'Ad is successfully deleted!');
    }

   public function editAdForm(Request $request, $id)
   {
       $user = Auth::user();
       $ad = Ad::find($id);
       $categories = Category::all();

       return view('editAdForm', compact('user','ad','categories'));
   }

   public function saveEditedAd(Request $request, $id)
   {
    $user = Auth::user();
    $ad = Ad::find($id);
    $categories = Category::all();

     $request->validate([
        'title' => 'required | max:255',
        'body' => 'required',
        'price' => 'required',
        'image1' => 'mimes:jpg,jpeg,png',
        'image2' => 'mimes:jpg,jpeg,png',
        'image3' => 'mimes:jpg,jpeg,png',
        'image4' => 'mimes:jpg,jpeg,png',
        'image5' => 'mimes:jpg,jpeg,png',
        'category' => 'required'
     ]);

     if ($request->hasFile('image1')) {

        $image1 = $request->file('image1');
        $image1_name = time().'1.'.$image1->extension();
        $image1->move(public_path('/images/add_images'), $image1_name);
     }
     if ($request->hasFile('image2')) {

         $image2 = $request->file('image2');
         $image2_name = time().'2.'.$image2->extension();
         $image2->move(public_path('/images/add_images'), $image2_name);
      }
      if ($request->hasFile('image3')) {

         $image3 = $request->file('image3');
         $image3_name = time().'3.'.$image3->extension();
         $image3->move(public_path('/images/add_images'), $image3_name);
      }
      if ($request->hasFile('image4')) {

         $image4 = $request->file('image4');
         $image4_name = time().'4.'.$image4->extension();
         $image4->move(public_path('/images/add_images'), $image4_name);
      }
      if ($request->hasFile('image5')) {

         $image5 = $request->file('image5');
         $image5_name = time().'5.'.$image5->extension();
         $image5->move(public_path('/images/add_images'), $image5_name);
      }

         $ad->update([
           'title' => $request->title,
           'body' => $request->body,
           'price' =>$request->price,
           'image1' => (isset($image1_name)) ? $image1_name : null,
           'image2' => (isset($image2_name)) ? $image2_name : null,
           'image3' => (isset($image3_name)) ? $image3_name : null,
           'image4' => (isset($image4_name)) ? $image4_name : null,
           'image5' => (isset($image5_name)) ? $image5_name : null,
           'user_id' => Auth::user()->id,
           'category_id' => $request->category
      ]);

         return redirect(route('home'));

   }

   public function deleteUser()
   {
       $user = Auth::user();

       $user->delete();

       return redirect(route('home'));
   }

}
