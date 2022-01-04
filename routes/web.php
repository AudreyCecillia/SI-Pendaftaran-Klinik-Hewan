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

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/home', function () {
    return view('Home', [
        "title" => "Home"
    ]);
});

Route::get('/data', function () {
    return view('Data', [
        "title" => "Data Pasien"
    ]);
});

Route::get('/daftar', function () {
    return view('Daftar', [
        "title" => "Pendaftaran Pasien"
    ]);
});