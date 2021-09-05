<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadfunction()
    {
        return view('upload') ;
    }
    public function uploadpost(Request $request)
    {
        $request->file->store('public');
        return "The file has been uoloaded";
    }
}
