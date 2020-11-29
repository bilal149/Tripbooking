<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Models\Uploader;

class HandelController extends Controller
{

    public function show($id)
    {
        $post=Uploader::find($id);
        return view('pages.service')->with('data',$post);
    }
}
