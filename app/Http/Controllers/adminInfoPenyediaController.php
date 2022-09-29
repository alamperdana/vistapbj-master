<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoPenyedia;
use App\Imports\InfoPenyediaImport;
use Maatwebsite\Excel\Facades\Excel;

class adminInfoPenyediaController extends Controller
{
    public function index(){
        $data = InfoPenyedia::get();

        return view('admininfopenyedia',[
            'data' => $data
        ]);

        // return response()->json([
        //     'data' => $data
        // ]);
    }

    public function index2($id){
        $data = InfoPenyedia::where('id',$id)->first();
        return view('admineditinfopenyedia',[
            'data'  => $data
        ]);
    }

    public function index3(){
        return view('tambahAdminInfoPenyedia');
    }

    public function store(Request $req){
        $this->validate($req, [
            'id'                => 'required',
			'nama_perusahaan'   => 'required',
			'npwp_perusahaan'   => 'required',
			'alamat_penyedia'   => 'required',
			// 'email_penyedia'    => 'required',
		]);

        InfoPenyedia::where('id',$req->id)->update([
            'nama_perusahaan' => $req->nama_perusahaan,
            'npwp_perusahaan'  => $req->npwp_perusahaan,
            'alamat_penyedia'  => $req->alamat_penyedia,
            'email_penyedia'  => $req->email_penyedia,
            'pengurus_penyedia' => $req->pengurus_penyedia,
            'keuangan_penyedia' => $req->keuangan_penyedia,
            'kapasitas_penyedia' => $req->kapasitas_penyedia,
            'saranaprasarana_penyedia' => $req->saranaprasarana_penyedia,
        ]); 

        return response()->json($req->id);
    }

    public function tambah(Request $req){
        $this->validate($req, [
			'nama_perusahaan'   => 'required',
			'npwp_perusahaan'   => 'required',
			'alamat_penyedia'   => 'required',
			'email_penyedia'    => 'required',
            'pengurus_penyedia'    => 'required',
		]);

        InfoPenyedia::create([
            'nama_perusahaan' => $req->nama_perusahaan,
            'npwp_perusahaan'  => $req->npwp_perusahaan,
            'alamat_penyedia'  => $req->alamat_penyedia,
            'email_penyedia'  => $req->email_penyedia,
            'pengurus_penyedia' => $req->pengurus_penyedia,
            'keuangan_penyedia' => $req->keuangan_penyedia,
            'kapasitas_penyedia' => $req->kapasitas_penyedia,
            'saranaprasarana_penyedia' => $req->saranaprasarana_penyedia,
        ]); 

        return response()->json($req->id);
    }

    public function import(Request $req){
        $this->validate($req, [
			'file'      => 'required'
		]);

        Excel::import(new InfoPenyediaImport(),request()->file('file'));
        return response()->json();
    } 
    
    public function hapus($id){
        InfoPenyedia::where('id',$id)->delete();

        return response()->json();
    }
}
