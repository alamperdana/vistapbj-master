<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoPenyedia;

class CariSkaSktController extends Controller
{
    public function cari (Request $request) 
    {
    	// mengambil data dari table 
		$data = InfoPenyedia::where('npwp_perusahaan', ($request->cari ?? false) )
								// ->orWhere('nama_perusahaan','like','%'($request->cari ?? false) )
								// ->orWhere('nama_perusahaan', 'like', '%'.$request->cari.'%')
								->paginate(100);    
		// dd($data);
    	// mengirim data pegawai ke view index
		return view('searchingskaskt', compact(['data']));
 
    	// // mengambil data dari table 
		// $paket = DB::table('paket_berjalan')
		// ->where('npwp_perusahaan ','like',"%".$cari."%")
		// ->paginate();
 
    	// 	// mengirim data pegawai ke view index
		// return view('searching',['pakpet' => $paket]);
    }
}
