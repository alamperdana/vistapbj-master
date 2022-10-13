<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller;
use App\Http\Middleware;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\adminPaketBerjalanController;
use App\Http\Controllers\adminInfoPenyediaController;
use App\Http\Controllers\dashboardPaketController;
//use App\Http\Controllers\ProfilPenggunaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\userPaketerBerjalanController;
use App\Http\Controllers\userInfoPenyediaController;
use App\Http\Controllers\CariPenyediaController;
<<<<<<< HEAD
=======
use App\Http\Controllers\UserguideController;
>>>>>>> 6d869fd (kompi kia)


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Admin
Auth::routes();
Route::get('/admin', [admincontroller::class, 'index'])->middleware(['auth', 'isAdmin'])->name('admin');
Route::get('/status/{id}', [HomeController::class, 'status'])->name('status');
//Download file Upload
Route::get('admin/{id}/download', 'admincontroller@download')->name('filedownload');
// Route::group(['Middleware' => ['isAdmin']], function () {
//     Route::get('/admin', [admincontroller::class, 'index'])->name('admin');
// });

// Route::group(['Middleware' => ['isUser']], function () {
//     Route::get('/user', [usercontroller::class, 'index'])->name('user');
// });

// Route::middleware(['auth', 'isUser'])->group(function(){
//     Route::get('/user', [App\Http\Controllers\usercontroller::class, 'index'])->name('user');
// });

// Route::middleware(['auth', 'isUser'])->group(function(){
//     Route::get('/user', [App\Http\Controllers\admincontroller::class, 'index'])->name('admin');

//Paket Berjalan
Route::get('/adminpaketerjalan', [adminPaketBerjalanController::class, 'index'])->name('adminpaketberjalan');
Route::get('/adminpaketerjalan/edit/{kode_paket}', [adminPaketBerjalanController::class, 'index2'])->name('adminpaketberjalanedit');
Route::get('/tambahadminpaketerjalan', [adminPaketBerjalanController::class, 'index3'])->name('tambahadminpaketberjalan');
Route::post('/adminpaketerjalan/import', [adminPaketBerjalanController::class, 'import']);
Route::post('/adminpaketerjalan/store', [adminPaketBerjalanController::class, 'store']);
Route::post('/adminpaketerjalan/tambah', [adminPaketBerjalanController::class, 'tambah'])->name('adminpaketberjalantambah');
Route::get('/adminpaketerjalan/hapus/{kode_paket}', [adminPaketBerjalanController::class, 'hapus']);

//Info Penyedia
Route::get('/admininfopenyedia', [adminInfoPenyediaController::class, 'index'])->name('adminpenyedia');
Route::get('/admininfopenyedia/edit/{id}', [adminInfoPenyediaController::class, 'index2']);
Route::get('/tambahadmininfopenyedia', [adminInfoPenyediaController::class, 'index3'])->name('tambahadmininfopenyedia');
Route::post('/admininfopenyedia/import', [adminInfoPenyediaController::class, 'import']);
Route::post('/admininfopenyedia/store', [adminInfoPenyediaController::class, 'store']);
Route::post('/admininfopenyedia/tambah', [adminInfoPenyediaController::class, 'tambah']);
Route::get('/admininfopenyedia/hapus/{id}', [adminInfoPenyediaController::class, 'hapus']);
//admin sampe sini


//Dashboard Paket
Route::get('dashboardpaket/getdata/{tahun}', [dashboardPaketController::class, 'getdata']);
Route::get('dashboardpaket', [dashboardPaketController::class, 'index'])->name('dashboardpaket');
Route::get('/', function () {
    return view('welcome');
});

//Dashboard Paket Awal tanpa Login
Route::get('datadashboardpaket/getdata/{tahun}', [dashboardPaketController::class, 'getdata2']);
Route::get('datadashboardpaket', [dashboardPaketController::class, 'index2'])->name('datadashboardpaket');
Route::get('/', function () {
    return view('welcome');
});

//User Guide
Route::get('/userguide', [UserguideController::class, 'index'])->name('userguide');
Route::get('/downloaduserguide', [UserguideController::class, 'downloaduserguide'])->name('downloaduserguide');

//Profil Pengguna
// Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
Route::get('/profil/{id}', [ProfilController::class, 'index'])->name('profil');
Route::get('/editprofil/{id}', [ProfilController::class, 'index2'])->name('editprofil');

Route::get('/validate', function () {
    if(auth()->user()->role == 1) {
        return redirect()->route('admin');
    }
    return redirect()->route('user');
})->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Pencarian Penyedia terkait SKP
Route::get('/caripenyedia', [App\Http\Controllers\CariPenyediaController::class, 'cari'])->name('caripenyedia');
<<<<<<< HEAD
=======
//Pencarian Penyedia terkait SKA SKT
Route::get('/cariskaskt', [App\Http\Controllers\CariSkaSktController::class, 'cari'])->name('cariskaskt');



>>>>>>> 6d869fd (kompi kia)

//User
// Route::get('/user', [usercontroller::class, 'index'])->middleware(['auth','isUser'])->name('user');
Route::get('/user', [userPaketerBerjalanController::class, 'index'])->middleware(['auth','isUser'])->name('user');

//Paket Berjalan
Route::get('/userpaketberjalan', 'App\Http\Controllers\userPaketerBerjalanController@index')->name('userpaketberjalan');
Route::post('/userpaketberjalan/import', [userPaketerBerjalanController::class, 'import']);

//Info Penyedia
Route::get('/userinfopenyedia', [userInfoPenyediaController::class, 'index'])->name('userinfopenyedia');
Route::post('/userinfopenyedia/import', [userInfoPenyediaController::class, 'import']);

