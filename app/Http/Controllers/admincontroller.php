<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;

class admincontroller extends Controller
{

    public function index()
    {
        //return view ('adminview', );
        $users = DB::table('users')->get();
        return view('adminview', ['users' => $users]);
    }

    // public function status(Request $request, $id){
    //     $data = User::find($id);
    //     {
    //         if($data->status == 0){
    //             $data->status = 1;
    //         }
    //         else{
    //             $data->status = 0;
    //         }
    //         $data->save();
    //         return Redirect('home')->with('message', 'status sudah diubah!');
    //     }
    // }

}
