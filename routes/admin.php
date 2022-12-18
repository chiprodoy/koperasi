<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->middleware(['auth'])->group(function(){
    Route::get('dashboard', [App\Http\Controllers\DashboardController::class,'index'])->name('dashboard');
    //Route::get('post', [App\Http\Controllers\PostController::class,'index'])->name('post.index');
    Route::resource('post',App\Http\Controllers\PostController::class);
    Route::resource('produk_halal',App\Http\Controllers\ProdukHalalController::class);
    Route::resource('jenis_produk',App\Http\Controllers\JenisProdukController::class);
    Route::get('/tes',function(){
        Log::critical('hello');
    });

});
