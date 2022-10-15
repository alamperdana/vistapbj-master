<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Response;

class UserguideController extends Controller
{
    public function index(){
        return view('userguide');
    }

    public function downloaduserguide (){
        $filepath = public_path('download/userguidee.pdf');
        return Response::download($filepath);  
    }
}
