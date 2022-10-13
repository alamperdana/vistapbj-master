<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illmuniate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'nip' => ['required', 'string', 'max:255'],
            'opd' => ['required', 'string', 'max:255'],
            'telepon' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'avatar' => 'mimes:doc,docx,pdf', 
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function create(array $data)
    {
        $filename='';
        if($data['avatar']){
            $filename= $data['avatar']->getClientOriginalName();
            $data['avatar']->storeAs('public/filepengajuan', $filename);
        }
    
        //isi data dari inputan pada form
        $datas = [
            'name' => $data['name'],
            'nip' => $data['nip'],
            'opd' =>  $data['opd'],          
            'telepon' => $data['telepon'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'status' => 0,
            'avatar' => $filename == '' ? null : $filename,
        ];        
        //proses simpan data
        $user = User::create($datas);
        //Kondisi jika berhasil simpan data
        if($user)
        {
            return redirect()->route('login');
        }
        // return User::create([
        //     'name' => $data['name'],
        //     'nip' => $data['nip'],
        //     'opd' => $data['opd'],
        //     'telepon' => $data['telepon'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        //     'status'=>false,
        //     'avatar' => $data['avatar'],
        // ]);


        // if(request::hasfile('avatar'))
        // {
        //     $request->file('avatar')->move(public_path('img/products/'), $request->file('avatar')->getClientOriginalName());

        //     $product->image = 'img/products/' . $request->file('image')->getClientOriginalName();
        // }

        //utube laravel daily dari sini
        // if (request()->hasFile('avatar'))
        // {
        //     $avatar= request()->file('avatar')->getClientOriginalName();
        //     request()->file('avatar')->move('filepengajuan', 'public');
        //     $user->update(['avatar' => $avatar]);
        // }
        // return $user;
        //sampe sini

        //laracast dari sini
        // $request = request();
        // $resume = $request->file('avatar');
        // $resumeSaveA sName = time() . Auth::id() . "-avatar." . 
        //                               $resume->getClientOriginalExtension();
        // $upload_path = 'FotoProfil/';
        // $resume_url = $upload_path . $resumeSaveAsName;
        // $success = $resume->move($upload_path, $resumeSaveAsName);
        //ini jg

        //aree dari sini
        // $avatar = $request->file('avatar');
        // //$path_1=null;
        // if(isset($avatar)){
        // $file_name = preg_replace('/\s+/', '_', $this->RandomString().$avatar->getClientOriginalName());
        // $avatar->move(env('UPLOAD_PATH'),$file_name);
        // }

        // function RandomString(): string
        // {
        //     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        //     $randstring = '';
        //     for ($i = 0; $i < 10; $i++) {
        //         $randstring = $characters[rand(0, strlen($characters)-1)];
        //     }
        //     return $randstring;
        // }
        // return $user;
        // aree sampe sini
    }
}