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
    return view('index');
});
Route::get('/KATEGORI', function () {
    return view('KATEGORI');
});
Route::get('/DAFTAR', function () {
    return view('DAFTAR');
});
Route::get('/SEPAKBOLA', function () {
    return view('SEPAKBOLA');
});
Route::get('/ESPORT', function () {
    return view('ESPORT');
});
Route::get('/MOTOGP', function () {
    return view('MOTOGP');
});

Route::get('/LOGIN', function () {
    return view('LOGIN');
});