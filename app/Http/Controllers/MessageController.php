<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    //
    public function addMassage(Request $request){
        $validated = $request->validate([
            'message'=>['required']
        ]);

        Message::create([
            'user_id'=>auth()->user()->user_id,
            'message'=>$validated['message']
        ]);

        return back()->with('message_success', 'your message has been successfully sent');
    }

    public function index(){
        $messages = Message::join('users', 'messages.user_id', '=', 'users.user_id')
            ->where('is_completed', false)
            ->get();

        return view('viewmsg', compact('messages'));

    }
}
