<?php

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
Route::get('/', function () {
    return view('landingpage.home');
});
Route::get('/home', function () {
    return view('landingpage.home');
});
Route::get('/about', function () {
    return view('landingpage.about');
});
Route::get('/contact', function () {
    return view('landingpage.kontak');
});
Route::get('/appoinment', function () {
    return view('landingpage.appoinment');
});
Route::get('/info', function () {
    return view('landingpage.info');
});
Route::get('/doctor', function () {
    return view('landingpage.doctor');
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

Route::get('/admin', function () {
    return view('admin.index');
});
