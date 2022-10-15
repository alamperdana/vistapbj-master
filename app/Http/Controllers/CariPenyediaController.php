<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\PaketBerjalan;
class CariPenyediaController extends Controller
{
    public function cari (Request $request) 
    {    
	
    	// mengambil data dari table 
		$data = PaketBerjalan::Where('npwp_perusahaan', ($request->cari ?? false))
				// ->orWhere('nama_perusahaan','like','%'($request->cari ?? false))->paginate(100);
				//->orWhere('npwp_perusahaan', 'like', '%'.$request->cari.'%')->paginate(100);    
		//dd($data);
    	// mengirim data pegawai ke view index
		->paginate(100);    
		return view('searchingpaket', compact(['data']));

		// $data = PaketBerjalan::where('npwp_perusahaan', ($request->cari ?? false) )
		// //->orWhere('nama_perusahaan','like','%'($request->cari ?? false) )
		// //->orWhere('nama_perusahaan', 'like', '%'.$request->cari.'%')
		// ->paginate(3)->withQueryString();
		// // //dd($data);
		// // // mengirim data pegawai ke view index
		// return view('searchingpaket', compact(['data']));
    }
}
