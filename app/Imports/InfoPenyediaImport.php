<?php

namespace App\Imports;

use App\Models\InfoPenyedia;
use Illuminate\Support\Collection;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\ToCollection;

class InfoPenyediaImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $arr = $row->toArray();
            $nama_perusahaan = array_shift($arr);
            $npwp_perusahaan = array_shift($arr);
            $alamat_penyedia = array_shift($arr);
            $email_penyedia = array_shift($arr);
            $pengurus_penyedia = array_shift($arr);
            $keuangan_penyedia = array_shift($arr);
            $kapasitas_penyedia = array_shift($arr);
            $saranaprasarana_penyedia = array_shift($arr);

            if($npwp_perusahaan){
                InfoPenyedia::updateOrCreate([
                    'npwp_perusahaan'        => $npwp_perusahaan,
                ],
                [
                    'nama_perusahaan'          => $nama_perusahaan,
                    'alamat_penyedia'          => $alamat_penyedia,
                    'email_penyedia'           => $email_penyedia,
                    'pengurus_penyedia'        => $pengurus_penyedia,
                    'keuangan_penyedia'        => $keuangan_penyedia,
                    'kapasitas_penyedia'       => $kapasitas_penyedia,
                    'saranaprasarana_penyedia' => $saranaprasarana_penyedia,
                ]); 
            }
        }
    }
}