<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoPenyedia;
use App\Imports\InfoPenyediaImport;
use Maatwebsite\Excel\Facades\Excel;

class userInfoPenyediaController extends Controller
{
    public function index(){
        $data = InfoPenyedia::get();

        return view('userinfopenyedia',[
            'data' => $data
        ]);
    }

        // return response()->json([
        //     'data' => $data
        // ]);
}
