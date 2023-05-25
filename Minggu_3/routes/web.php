<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController;
use App\Http\Controllers\tes2;

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

// Parameter pertama pada fungsi ini adalah URL yang akan diproses, yaitu /user.
//parameter kedua 1. mendefinisikan klo class ini yang dipanggil
//2.nama methodnya
Route::get('/home', function () {
    return view('home');
});

Route::resource('user', ManagementUserController::class);
Route::resource('tes', tes2::class);


