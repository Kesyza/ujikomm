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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function(){
    Route::get('/', function () {
        return 'halaman admin';
    });

    Route::get('/profile', function () {
        return 'halaman profile admin';
    });
});

Route::group(['prefix' => 'user', 'middleware' => ['auth', 'role:user']], function(){
    Route::get('/', function () {
        return 'halaman user';
    });

    Route::get('/profile', function () {
        return 'halaman profile user';
    });
});