<?php

namespace App\Http\Controllers;

use App\Http\Controllers\GudangControllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('partials/register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/barangmasuk', function () {
    return view('barangmasuk');
});

Route::get('/barangkeluar', function () {
    return view('barangkeluar');
});

Route::get('/gudang', function () {
    return view('gudang');
});

Route::get('/input', function () {
    return view('input');
});

Route::get('/output', function () {
    return view('output');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/edit', function () {
    return view('edit');
});