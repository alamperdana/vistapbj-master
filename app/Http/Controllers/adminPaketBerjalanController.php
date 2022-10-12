<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaketBerjalan;
use App\Imports\PaketBerjalanImport;
use Maatwebsite\Excel\Facades\Excel;

class adminPaketBerjalanController extends Controller
{
    public function index(){
        $data = PaketBerjalan::get();

        foreach ($data as $key => $value) {
            if($value->paket_berjalan == '0') $value->paket_berjalan = "Selesai";
            elseif($value->paket_berjalan == '1') $value->paket_berjalan = "Berjalan";
            else $value->paket_berjalan = " ";
        }

        return view('adminpaketberjalan',[
            'data' => $data
        ]);

        // return response()->json([
        //     'data' => $data
        // ]);
    }

    public function index2($kode_paket){
        $data = PaketBerjalan::where('kode_paket',$kode_paket)->first();
        return view('editAdminPaket',[
            'data'  => $data
        ]);
    }

    public function index3(){
        return view('tambahAdminPaket');
    }

    public function tambah(Request $req){
        $this->validate($req, [
			'jenis_paket'           => 'required',
			'kode_paket'            => 'required',
			'pagu_paket'            => 'required',
			'npwp_perusahaan'       => 'required',
			'nama_satker'           => 'required',
            'tahun'                 => 'required',
            'bulan'                 => 'required',
            'metode_paket'          => 'required',
            'nama_perusahaan'       => 'required',
		]);

        PaketBerjalan::create([
            'jenis_paket' => $req->jenis_paket,
            'pagu_paket'  => $req->pagu_paket,
            'hps_paket'   => $req->hps_paket,
            'tahun'       => $req->tahun,
            'bulan'       => $req->bulan,
            'metode_paket'  => $req->metode_paket,
            'awal_paket'  => $req->awal_paket,
            'akhir_paket'  => $req->awal_paket,
            'awal_kontrak_paket'  => $req->awal_kontrak_paket,
            'akhir_kontrak_paket'  => $req->akhir_kontrak_paket,
            'npwp_perusahaan'  => $req->npwp_perusahaan,
            'nama_satker'  => $req->nama_satker,
            'skp'=>$req->skp,
            'paket_berjalan'  => $req->paket_berjalan,
            'nama_perusahaan' => $req->nama_perusahaan,
        ]);

        return response()->json($req->kode_paket);
    }

    public function store(Request $req){
        $this->validate($req, [
			'jenis_paket'     => 'required',
			'kode_paket'      => 'required',
			'pagu_paket'      => 'required',
			'npwp_perusahaan' => 'required',
			'nama_satker'      => 'required',
		]);

        PaketBerjalan::where('kode_paket',$req->kode_paket)->update([
            'jenis_paket' => $req->jenis_paket,
            'nama_paket' => $req->nama_paket,
            'pagu_paket'  => $req->pagu_paket,
            'hps_paket'   => $req->hps_paket,
            'tahun'       => $req->tahun,
            'bulan'       => $req->bulan,
            'metode_paket'  => $req->metode_paket,
            'awal_paket'  => $req->awal_paket,
            'akhir_paket'  => $req->awal_paket,
            'awal_kontrak_paket'  => $req->awal_kontrak_paket,
            'akhir_kontrak_paket'  => $req->akhir_kontrak_paket,
            'npwp_perusahaan'  => $req->npwp_perusahaan,
            'nama_satker'  => $req->nama_satker,
            'skp'=>$req->skp,
            'paket_berjalan'  => $req->paket_berjalan,
            'nama_perusahaan' => $req->nama_perusahaan,
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

    public function hapus($kode_paket){
        PaketBerjalan::where('kode_paket',$kode_paket)->delete();
        return response()->json();
    }
}
