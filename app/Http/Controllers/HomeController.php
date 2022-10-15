<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = DB::table('users')->get();
        return view('adminview', ['users' => $users]);
    }

    public function status(Request $request, $id){
        $data = User::find($id);
        {
            if($data->status == 0){
                $data->status = 1;
            }
            else{
                $data->status = 0;
            }
            $data->save();
           return Redirect('home')->with('message', 'status sudah diubah!');
        }
    }
}
