<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageSentEvent;
use App\Message;
use App\User;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return Message::with('user')->get();
    }

    public function store(Request $request)
    {
        // $Iduser = Auth::id();
        // $user = User::findOrFail($Iduser);

        $user = Auth::user();
        $message = $user->messages()->create([
            'message' => $request->input('message')
        ]);
        // send event to listeners
        broadcast(new MessageSentEvent($message, $user))->toOthers();
    
        return [
            'message' => $message,
            'user' => $user,
        ];
    }
}
