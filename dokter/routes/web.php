<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//routing landingpage
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('landingpage.home');
});
Route::get('/about', function () {
    return view('landingpage.about');
});
Route::get('/contact', function () {
    return view('landingpage.kontak');
});
Route::get('/detail_produk', function () {
    return view('landingpage.detail_produk');
});
Route::get('/detail_obat', function () {
    return view('landingpage.detail_obat');
});
Route::get('/appoinment', function () {
    return view('landingpage.appoinment');
});
Route::get('/info', function () {
    return view('landingpage.info');
});
Route::get('/info_detail', function () {
    return view('landingpage.info_detail');
});
Route::get('/doctor', function () {
    return view('landingpage.doctor');
});
Route::get('/daftar_rs', function () {
    return view('landingpage.daftar_rs');
});
Route::get('/hospital', function () {
    return view('landingpage.hospital');
});
Route::get('/obat', function () {
    return view('landingpage.obat');
});
Route::get('/beli_obat', function () {
    return view('landingpage.beli_obat');
});
// Route::get('/contact',function(){
//     return view('landingpage.login');
// });
//login belum ada


Route::get('/login', function () {
    return view('landingpage.login');
});

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    // controller dokter
    Route::resource('admin/dokter', DokterController::class);

    // controller obat
    Route::resource('admin/obat', ObatController::class);
    Route::get('/downloadExcel', [ObatController::class, 'exportExcel'])->name('download-excel');

    // controller resep
    Route::resource('admin-resep', ResepController::class);
    Route::get('/resep-cetak-pdf', [ResepController::class, 'exportPdf'])->name('resep-pdf');

    // controller user
    Route::resource('admin-user', UserController::class);
    Route::get('/downloadExcel/user', [UserController::class, 'exportExcel'])->name('download-excel-user');
});



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
