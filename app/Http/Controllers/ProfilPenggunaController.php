<?php

namespace App\Http\Controllers;
use DB;
use App\Models\User;

use Illuminate\Http\Request;

class ProfilPenggunaController extends Controller
{
    public function index(){
        $users = DB::table('users')->get();
        return view('adminview', ['user' => $users]);
    }
}
