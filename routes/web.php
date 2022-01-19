<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\RegisterController;

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
        "title" => "Home",
        "active" => 'Home'
    ]);
});

Route::get('/data', function () {
    return view('Data', [
        "title" => "Data Pasien",
        "active" => "DataPasien"
    ]);
});

Route::get('/daftar', function () {
    return view('Daftar', [
        "title" => "Pendaftaran Pasien",
        "active" => "DaftarPasien"
    ]);
});

Route:: get('/data/add', 'DataController@add');
Route:: get('/data/addProcess', 'DataController@addProcess');

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);