<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Events\ChatEvent;

class ChatController extends Controller
{
    public function getChatList()
    {
    	return view('chat');
    }


    public function submitMessage(Request $request)
    {
    	$user = User::find(Auth::id());
    	event(new ChatEvent($request->message,$user));
    }

    public function pusherTest()
    {

    	$user = User::find(Auth::id());
    	event(new ChatEvent('Hi this is rizwan.',$user));
    }
}
