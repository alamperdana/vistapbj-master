<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use App\Models\Profil;

class ProfilController extends Controller
{
    public function index($id){
        $data = Profil::where('id',$id)->first();
        return view('Profilsaya',[
            'data'  => $data
        ]);  
        //return view('Profilsaya');
    }

    // public function index2()
    // {
    //     $data = User::where('id',$id)->first();
    //     return view('Profilsaya',[
    //         'data'  => $data
    //     ]);  
    // }

    public function index3($id){
        $data = Profil::where('id',$id)->first();
        return view('profilpengguna',[
            'data'  => $data
        ]);  
        //return view('Profilsaya');
    }

    public function store(Request $req){
        $this->validate($req, [
            'name'       => 'required',
			'email'      => 'required',
			// 'password'   => 'required',
			'nip'        => 'required',
            'opd'        => 'required',
            'telepon'    => 'required',
			// 'email_penyedia'    => 'required',
		]);

        Profil::where('id',$req->id)->update([
            'name'      => $req->name,
            'email'     => $req->email,
            'password'  => $req->password,
            'nip'  => $req->nip,
            'opd' => $req->opd,
            'telepon' => $req->telepon,
        ]); 

        return response()->json($req->id);
    }

}
