<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\User;
use Illuminate\Http\Request;

class AdController extends Controller
{
     public function index($id)
     {
          $ad = Ad::find($id);
          if (auth()->check() && auth()->user()->id !== $ad->user_id) {

              $ad->increment('views');
          }

          return view('singleAdCategory', ['ad' => $ad]);
     }

     public function allUserAds($id)
     {
         $user = User::find($id);

         $userAds = Ad::all()->where('user_id','==', $user->id);

         return view('allUserAds', compact('userAds','user'));

     }
}
