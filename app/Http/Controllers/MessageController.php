<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
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

    public function replayMsg($id)
    {
        $message = Message::find($id);

        $user = Auth::user();
        $sender_id = $message->sender_id;
        $ad_id = $message->ad_id;
        $ad_name = $message->ad_name;



        return view('replayMsg', compact('sender_id','ad_id','message','user','ad_name'));
    }

    public function replayMsgStore(Request $request, $id)
    {
        $sender = Auth::user();
        $old_Message = Message::find($id);
        $ad_name = $old_Message->ad_name;

       //dd($old_Message->ad_id);

         $request->validate([

        'body' => 'required',

        ]);

        // New message

        $message = new Message();
        $message->title = $old_Message->title;
        $message->ad_name = $old_Message->ad_name;
        $message->body = $request->body;
        $message->replay = $old_Message->body;
        $message->sender_id = Auth::user()->id;
        $message->receiver_id = $old_Message->sender_id;
        $message->ad_id = $old_Message->ad_id;
        $message->save();

        return redirect()->route('showUserMessages')->with('message', 'Replay sent.');


    }

    public function deleteMsg($id)
    {
        $message = Message::find($id);
        $message->delete();

        return redirect()->back()->with('message', 'Message is deleted.');


    }
}
