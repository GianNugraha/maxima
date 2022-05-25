<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\MapelController;

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

// Route::get('/', function () {
//     return view('home');
//     });
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('tambah',[HomeController::class,'create'])->name('tambah');

Route::get('daftar',[ObatController::class,'daftar'])->name('daftar');
Route::get('siswa',[SiswaController::class,'index'])->name('siswa');
Route::post('siswa_store',[SiswaController::class,'store'])->name('siswa_store');
Route::get('mapel',[MapelController::class,'index'])->name('mapel');
    // Route::get('daftar', function () {
    //     return view('daftar');
    //     });
        // Route::get('tambah', function () {
        // return view('tambah');
        // });
        Route::get('edit', function () {
        return view('edit');
        });