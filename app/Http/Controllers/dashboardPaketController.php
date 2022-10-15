<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaketBerjalan;
use App\Imports\PaketBerjalanImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class dashboardPaketController extends Controller
{
    public function index(){
        return view('dashboardPaket');
    }

    public function getdata($tahun){
        if($tahun == 0){
            $tahun = date('Y');
        }
        $data = DB::SELECT("SELECT COUNT(paket_berjalan) total, 
                                CASE WHEN paket_berjalan = 0 THEN 'Selesai'
                                     WHEN paket_berjalan = 1 THEN 'Berjalan'
                                END AS paket_berjalan
                            FROM paket_berjalan
                            WHERE tahun = $tahun
                            GROUP BY paket_berjalan");

        $data2 = DB::SELECT("SELECT COUNT(jenis_paket) total , jenis_paket 
                            FROM `paket_berjalan` 
                            WHERE tahun = $tahun
                            GROUP BY jenis_paket"
                        );

        return response()->json([
            'data' => $data,
            'data2' => $data2
        ]);
    }

    public function index2(){
        return view('dashboardpaketawal');
    }

    public function getdata2($tahun){
        if($tahun == 0){
            $tahun = date('Y');
        }
        $data = DB::SELECT("SELECT COUNT(paket_berjalan) total, 
                                CASE WHEN paket_berjalan = 0 THEN 'Selesai'
                                     WHEN paket_berjalan = 1 THEN 'Berjalan'
                                END AS paket_berjalan
                            FROM paket_berjalan
                            WHERE tahun = $tahun
                            GROUP BY paket_berjalan");

        $data2 = DB::SELECT("SELECT COUNT(jenis_paket) total , jenis_paket 
                            FROM `paket_berjalan` 
                            WHERE tahun = $tahun
                            GROUP BY jenis_paket"
                        );

        return response()->json([
            'data' => $data,
            'data2' => $data2
        ]);
    }

    public function index3(){
        return view('dashboardpaketuser');
    }

    public function getdata3($tahun){
        if($tahun == 0){
            $tahun = date('Y');
        }
        $data = DB::SELECT("SELECT COUNT(paket_berjalan) total, 
                                CASE WHEN paket_berjalan = 0 THEN 'Selesai'
                                     WHEN paket_berjalan = 1 THEN 'Berjalan'
                                END AS paket_berjalan
                            FROM paket_berjalan
                            WHERE tahun = $tahun
                            GROUP BY paket_berjalan");

        $data2 = DB::SELECT("SELECT COUNT(jenis_paket) total , jenis_paket 
                            FROM `paket_berjalan` 
                            WHERE tahun = $tahun
                            GROUP BY jenis_paket"
                        );

        return response()->json([
            'data' => $data,
            'data2' => $data2
        ]);
    }
   
}
