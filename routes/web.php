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
    return view('bhabin/index');
});

Route::get('/laporan' , function(){
    return view('bhabin/laporan/index');
} );

Route::prefix('/laporan')->group(function(){
    Route::get('/dds' , function(){
        return view('bhabin/laporan/dds/index');
    });
    Route::get('/dds/dds-warga' , function(){
        return view('bhabin/laporan/dds/dds-warga');
    });
});