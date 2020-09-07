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

Route::get('/', 'AuthController@login');
Route::get('/dashboard', 'AuthController@dashboard');
Route::get('/daftarPenyakit', 'AuthController@daftarPenyakit');
Route::get('/news', 'AuthController@news');
Route::get('/keluhKesah', 'AuthController@keluhKesah');
Route::get('/account', 'AuthController@account');
Route::get('/edit', 'AuthController@editNews');
Route::get('/penyakitpertanian', 'AuthController@penyakitPertanian');
Route::get('/kebijakan', 'AuthController@kebijakan');
Route::get('/informasiPupuk', 'AuthController@informasiPupuk');
Route::get('/bantuanPertanian', 'AuthController@bantuanPertanian');
Route::get('/isuPertanian', 'AuthController@isuPertanian');
Route::get('/pengaduan', 'AuthController@pengaduan');
