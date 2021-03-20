<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use App\Models\Message;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['welcome','contactForm','home','aboutMe']]);
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
    public function aboutMe()
    {
        return view('aboutMe');
    }
    public function contactForm(Request $request)
    {


        return view('contactForm');

    }

    public function emailContact(Request $request) {
        $data = [];
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'body' => 'required'
        ]);

            $data =[
                'name' => $request->name,
                'email' => $request->email,
                'body' => $request->body
            ];

        Mail::send('contactForm', $data, function($message) use($data){
            //$message->from($data['name']);
            $message->from($data['email']);
            $message->to('savkicn@gmail.com');
        });

        return redirect()->back()->with('message', 'Your email is sent.');
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

            return redirect(route('home'))->with('message', 'Your ad is successfully created!');

    }

    public function showSingleAd($id)
    {
      $user = Auth::user();
      $ad = Ad::find($id);

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

         return redirect(route('home'))->with('message', 'Your ad is successfully updated!');

   }

   public function userMessage(Request $request, $id)
   {
             $user = Auth::user();
             $ad_name = Ad::find($id)->title;

             $request->validate([

                 'body' => 'required',

             ]);

             // New Message

            $messages = new Message();

            $messages->title = $request->title;
            $messages->ad_name = $ad_name;
            $messages->body = $request->body;
            $messages->sender_id = auth()->user()->id;
            $messages->receiver_id = Ad::find($id)->user_id;
            $messages->ad_id = Ad::find($id)->id;
            $messages->save();



            return redirect()->back()->with('message', 'Your message is sent to owner of this ad. ');

    }

    public function showMessages()
    {

        $user = Auth::user();
        $messages = Message::all()->where('receiver_id', Auth::user()->id);

        return view('showUserMessages', compact('messages','user'));
    }

    public function replayMsg()
    {
        $user = Auth::user();
        $sender_id = request()->sender_id;
        $ad_id = request()->ad_id;
        $ad_name = request()->ad_name;


        $messages = Message::where('sender_id',$sender_id)->where('ad_id',$ad_id)->where('ad_name', $ad_name)->get();

        return view('replayMsg', compact('sender_id','ad_id','messages','user','ad_name'));
    }

    public function replayMsgStore(Request $request)
    {
        $sender = User::find($request->sender_id);
        $ad = Ad::find($request->ad_id);
       // $ad_name = Ad::find($request->ad_name);

        // New message

        $message = new Message();
        $message->title = $request->title;
        $message->ad_name = $ad->title;
        $message->body = $request->body;
        $message->sender_id = Auth::user()->id;
        $message->receiver_id = $sender->id;
        $message->ad_id = $ad->id;
        $message->save();

        return redirect()->route('home.showUserMessages')->with('message', 'Replay sent.');


    }

    public function deleteMsg($id)
    {
        $message = Message::find($id);
        $message->delete();

        return redirect()->back()->with('message', 'Message is deleted.');

    }





   public function deleteUser()
   {
       $user = Auth::user();

       $user->delete();

       return redirect(route('home'));
   }

}
