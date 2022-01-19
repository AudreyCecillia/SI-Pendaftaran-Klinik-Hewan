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

