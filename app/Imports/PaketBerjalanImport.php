<?php

namespace App\Imports;

use App\Models\PaketBerjalan;
use Illuminate\Support\Collection;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\ToCollection;

class PaketBerjalanImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $arr = $row->toArray();

            $metode_paket = array_shift($arr);
            $tahun = array_shift($arr);
            $bulan = array_shift($arr);
            $kode_paket = array_shift($arr);
            $nama_paket = array_shift($arr);
            $nama_satker = array_shift($arr);
            $pagu_paket = array_shift($arr);
            $hps_paket = array_shift($arr);
            $jenis_paket = array_shift($arr);
            $awal_paket = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject(array_shift($arr));
            $akhir_paket = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject(array_shift($arr));
            $awal_kontrak_paket = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject(array_shift($arr));
            $akhir_kontrak_paket = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject(array_shift($arr));
            $npwp_perusahaan = array_shift($arr);

            if($kode_paket){

                PaketBerjalan::updateOrInsert([
                    'kode_paket'        => $kode_paket,
                ],
                [
                    'metode_paket'      => $metode_paket,
                    'tahun'             => $tahun,
                    'bulan'             => $bulan,
                    'nama_paket'        => $nama_paket,
                    'pagu_paket'        => $pagu_paket,
                    'hps_paket'         => $hps_paket,
                    'jenis_paket'       => $jenis_paket,
                    'awal_paket'        => $awal_paket,
                    'akhir_paket'        => $akhir_paket,
                    'awal_kontrak_paket'    => $awal_kontrak_paket,
                    'akhir_kontrak_paket'   => $akhir_kontrak_paket,
                    'npwp_perusahaan'       => $npwp_perusahaan,
                    'nama_satker'       => $nama_satker,
                ]); 
            }
        }
    }
}
