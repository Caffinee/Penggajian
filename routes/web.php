<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;


Route::get('/Home',[IndexController::class,'index']);
Route::get('/Jabatan',[IndexController::class.'jabatan']);
Route::get('/Karyawan',[IndexController::class.'karyawan']);
Route::get('/Gaji',[IndexController::class.'gaji']);
Route::get('/Laporan',[IndexController::class.'laporan']);

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/Jabatan', function(){
    return view('jabatan');
});

Route::get('/Karyawan', function(){
    return view('karyawan');
});

Route::get('/Gaji', function(){
    return view('gaji');
});

Route::get('/Laporan', function(){
    return view('laporan');
});