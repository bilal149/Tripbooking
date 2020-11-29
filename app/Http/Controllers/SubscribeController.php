<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Sendsub;

class SubscribeController extends Controller
{
    
    function index(){
        return view('footer');
        return view('index');
    }

    function send(Request $request)
    {
        $this->validate($request,[
         
            'sub_email' => 'required|email'
        ]);

        $sub = array(
            'sub_email' =>  $request->sub_email
        );

        Mail::to($sub['sub_email'])->send(new Sendsub($sub));
        return back()->with('success', 'Thanks for contacting us!');

    }
} 
