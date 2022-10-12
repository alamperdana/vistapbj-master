<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class CariPenyediaController extends Controller
{
    public function cari (Request $request) 
    {
        $cari = $request->cari;
 
    	// mengambil data dari table 
		$paket = DB::table('paket_berjalan')
		->where('npwp_perusahaan ','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('searching',['pakpet' => $paket]);
    }
}
