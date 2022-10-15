<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\PaketBerjalan;
use App\Imports\PaketBerjalanImport;
use Maatwebsite\Excel\Facades\Excel;

class usercontroller extends Controller
{
    // public function index(){
    //     $data = PaketBerjalan::get();

    //     foreach ($data as $key => $value) {
    //         if($value->paket_berjalan == '0') $value->paket_berjalan = "Selesai";
    //         elseif($value->paket_berjalan == '1') $value->paket_berjalan = "Berjalan";
    //         else $value->paket_berjalan = " ";
    //     }

    //     return view('userpaketberjalan',[
    //         'data' => $data
    //     ]);

    //     // return response()->json([
    //     //     'data' => $data
    //     // ]);
    // }

    public function index(){
    return view('userview');
    }
}