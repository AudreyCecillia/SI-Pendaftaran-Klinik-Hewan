<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasienController;
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
        "title" => "Home"
    ]);
});

Route::get('/wali/create', function () {
    return view('/wali/create', [
        "title" => "Pendaftaran Wali"
    ]);
});


Route::get('/pasien/create', function () {
    return view('/pasien/create', [
        "title" => "Pendaftaran Pasien"
    ]);
});

Route::get('/wali/index', function () {
    return view('/wali/index', [
        "title" => "Data Wali"
    ]);
});


Route::get('/pasien/index', function () {
    return view('/pasien/index', [
        "title" => "Data Pasien"
    ]);
});

Route:: get('/data/add', 'DataController@add');
Route:: get('/data/addProcess', 'DataController@addProcess');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard',function(){
    return view('dashboard.index');});
// })->middleware(['auth']);
