<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Send;
class SendEmailController extends Controller
{
    function index(){
        return view('send_email');
    }

    function send(Request $request)
    {
        $this->validate($request,[
            'name' => 'required', 
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        );

        Mail::to('test@pcocarrent.co.uk')->send(new Send($data));
        return back()->with('success', 'Thanks for contacting us!');
    }
}
 