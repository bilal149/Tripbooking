<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Sendm;
class BookTripController extends Controller
{
    function index(){
        return view('booktrip');
    } 

    function send(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'service1' => 'required',
            'service2' => 'required',
            'service3' => 'required',
            'service4' => 'required',
            'service5' => 'required',
            'phone_no' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $data = array(
            'name' => $request->name,

             'service1' => $request->service1,
            'service2' => $request->service2,
            'service3' => $request->service3,
            'service4' => $request->service4,
            'service5' => $request->service5,
            
            'email' => $request->email,
            'phone_no' => $request->phone_no,
            'subject' => $request->subject,
            'message' => $request->message
        );

        Mail::to('test@pcocarrent.co.uk')->send(new Sendm($data));
        return back()->with('success', 'Thanks for contacting us!');
    }
}
 