<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Admin\PageController::class,'index']);
Route::get('/mahasiswa',[App\Http\Controllers\Admin\PageController::class,'tampil']);
