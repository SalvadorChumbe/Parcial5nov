<?php

namespace App\Http\Controllers;
use App\Mail\MessageReceived;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        return view('message_received');
    }

    public function send(){
        
    }
}
