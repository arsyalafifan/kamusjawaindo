<?php

use App\Http\Controllers\KamusController;
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
    return view('layouts.master');
});

Route::get('kamus/jawa', [KamusController::class, 'terjemahan_jawa'])->name('kamus.jawa');
Route::get('kamus/indonesia', [KamusController::class, 'terjemahan_indonesia'])->name('kamus.indonesia');
Route::resource('kamus', KamusController::class);
