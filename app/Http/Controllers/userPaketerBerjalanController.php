<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaketBerjalan;
use App\Imports\PaketBerjalanImport;
use Maatwebsite\Excel\Facades\Excel;


class userPaketerBerjalanController extends Controller
{
    public function index(){
        $data = PaketBerjalan::get();

        return view('userpaketberjalan',[
            'data' => $data
        ]);

        // return response()->json([
        //     'data' => $data
        // ]);
    }

    public function store(Request $req){
        $this->validate($req, [
			'jenis_paket'     => 'required',
			'kode_paket'      => 'required',
			'pagu_paket'      => 'required',
			'npwp_perusahaan'      => 'required',
			'nama_satker'      => 'required',
		]);

        PaketBerjalan::where('kode_paket',$req->kode_paket)->update([
            'jenis_paket' => $req->jenis_paket,
            'pagu_paket'  => $req->pagu_paket,
            'npwp_perusahaan'  => $req->npwp_perusahaan,
            'nama_satker'  => $req->nama_satker,
        ]);

        return response()->json($req->kode_paket);
    }

    public function import(Request $req){
        $this->validate($req, [
			'file'      => 'required'
		]);

        Excel::import(new PaketBerjalanImport(),request()->file('file'));

        return response()->json();
    }
}
