<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
use DB;
use Illuminate\Http\Request;
=======
//use DB;
use Illuminate\Http\Request;
use App\Models\PaketBerjalan;
>>>>>>> 6d869fd (kompi kia)

class CariPenyediaController extends Controller
{
    public function cari (Request $request) 
    {
<<<<<<< HEAD
        $cari = $request->cari;
 
    	// mengambil data dari table 
		$paket = DB::table('paket_berjalan')
		->where('npwp_perusahaan ','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('searching',['pakpet' => $paket]);
=======
    	// mengambil data dari table 
		$data = PaketBerjalan::where('npwp_perusahaan', ($request->cari ?? false) )
								->orWhere('nama_perusahaan','like','%'($request->cari ?? false) )
								->paginate(3)->withQueryString();    
		// dd($data);
    	// mengirim data pegawai ke view index
		return view('searchingpaket', compact(['data']));
 
    	// // mengambil data dari table 
		// $paket = DB::table('paket_berjalan')
		// ->where('npwp_perusahaan ','like',"%".$cari."%")
		// ->paginate();
 
    	// 	// mengirim data pegawai ke view index
		// return view('searching',['pakpet' => $paket]);
>>>>>>> 6d869fd (kompi kia)
    }
}
