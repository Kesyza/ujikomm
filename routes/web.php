<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MerekController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\SopirController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\TransaksiController;

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
//     return view('user.index');
// });

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function(){
    Route::resource('/merek', MerekController::class);
    Route::resource('/pelanggan', PelangganController::class);
    Route::resource('/sopir', SopirController::class);
    Route::resource('/mobil', MobilController::class);
    Route::resource('/transaksi', TransaksiController::class);
});

Route::group(['prefix' => 'user', 'middleware' => ['auth', 'role:user']], function(){
    Route::get('/', function () {
        return 'halaman user';
    });

    Route::get('/profile', function () {
        return 'halaman profile user';
    });
});

Route::get('index', function () {
    return view('user.index');
});

Route::get('tentang', function () {
    return view('user.tentang');
});

Route::get('lihat', function () {
    return view('user.lihat');
});

Route::get('sewa', function () {
    return view('user.sewa');
});