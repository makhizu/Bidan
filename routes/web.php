<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IbuController;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PelayananController;

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

Route::get('/', function () {
    return view('login.login');
});

Route::get('/home', function () {
    return view('menu.home', [
        "dropdown" => "Home",
        "title" => "Home"
    ]);
});

Route::get('/page', function () {
    return view('page', [
        "dropdown" => "Dashboard",
        "title" => "Dashboard"
    ]);
});




Route::get('/pasien', [MenuController::class, 'menuPasien']);
Route::get('/obat', [MenuController::class, 'menuObat']);
Route::get('/datamaster', [MenuController::class, 'menuDatamaster']);
Route::get('/pelayanan', [MenuController::class, 'menuPelayanan']);

///////////////////////////// PASIEN ////////////////////////////////
// DATA IBU
Route::get('/tambah_ibu', [IbuController::class, 'formIbu']);
Route::get('/data_ibu', [IbuController::class, 'index']);
Route::get('/data_ibu/{d_ibu:NIK}', [IbuController::class, 'show']);
// {d_ibu:NIK} -> (memasukan data NIK ke variable d_ibu, memanggil fungsi 'show' di IbuController dengan parameter d_ibu) route model binding, megnikat model ke controller. mempermudah jika ingin mengganti parameter untuk mencari data pada kolom



// Data Anak
Route::get('/data_anak', [AnakController::class, 'index']);

///////////////////////////// OBAT ////////////////////////////////
// Obat
Route::get('/data_obat', [ObatController::class, 'AllObat']);
// Vaksin
Route::get('/data_vaksin', [ObatController::class, 'AllVaksin']);
// Akseptor
Route::get('/data_akseptor', [ObatController::class, 'AllAkseptor']);

///////////////////////////// PELAYANAN ////////////////////////////////
//Imunisasi
Route::get('/data_imunisasi', [PelayananController::class, 'AllImunisasi']);
//KB
Route::get('/data_kb', [PelayananController::class, 'AllKB']);
//Kehamilan
Route::get('/data_kehamilan', [PelayananController::class, 'AllKehamilan']);
//Persalinan
Route::get('/data_persalinan', [PelayananController::class, 'AllPersalinan']);
