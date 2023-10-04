<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\GaleriController;
use App\Http\Controllers\Web\MediaWebController;
use App\Http\Controllers\JenisSyaratController;
use App\Http\Controllers\Web\CekUmurWebController;

Route::prefix('/admin')->middleware(['auth'])->group(function(){
    Route::get('/', [App\Http\Controllers\DashboardController::class,'index'])->name('dashboard');
    //Route::get('post', [App\Http\Controllers\PostController::class,'index'])->name('post.index');
    Route::resource('post',App\Http\Controllers\PostController::class);
    Route::resource('category',App\Http\Controllers\PostCategoryController::class);
    Route::get('/tes',function(){
        Log::critical('hello');
    });
    Route::get('/browse/{categoryslug}/create',[App\Http\Controllers\PostController::class,'browseCreate'])->name('browse.create');
    Route::get('/browse/{categoryslug}',[App\Http\Controllers\PostController::class,'browse'])->name('browse.index');
    Route::get('/browse/{categoryslug}/{uid}/edit',[App\Http\Controllers\PostController::class,'browseEdit'])->name('browse.edit');
    Route::get('/browse/{categoryslug}/{uid}/show',[App\Http\Controllers\PostController::class,'browseShow'])->name('browse.show');
    Route::put('/browse/{categoryslug}/{uid}',[App\Http\Controllers\PostController::class,'browseUpdate'])->name('browse.update');
    Route::post('/browse/{categoryslug}/create',[App\Http\Controllers\PostController::class,'browseStore'])->name('browse.store');

    // Route::prefix('browse')->group(function(){
    //     Route::get('/{categoryslug}', [App\Http\Controllers\PostController::class,'browse'])->name('browse.index');
    // });
    Route::resource('user',App\Http\Controllers\UserController::class);
    Route::resource('comment',App\Http\Controllers\CommentController::class);

    Route::post('ckeditor/upload', [App\Http\Controllers\FileController::class,'ckeditorupload'])->name('ckeditor.image-upload');

    Route::prefix('galeri')->group(function () {
        Route::get('/', [GaleriController::class, 'index'])->name('admin.galeri.index');

        Route::get('/{galeri}', [GaleriController::class, 'show'])->name(
            'admin.galeri.show'
        );
        Route::get('/edit/{galeri}', [GaleriController::class, 'edit'])->name(
            'admin.galeri.edit'
        );
        Route::post('/', [GaleriController::class, 'store'])->name('admin.galeri.store');
        Route::patch('/{galeri}', [GaleriController::class, 'update'])->name(
            'admin.galeri.update'
        );
        Route::delete('/{galeri}', [GaleriController::class, 'destroy'])->name(
            'admin.galeri.destroy'
        );

    });

    Route::prefix('media')->group(function () {
        Route::get('/', [MediaWebController::class, 'index'])->name(
            'media.index'
        );
        Route::get('/{media}', [MediaWebController::class, 'show'])->name(
            'media.show'
        );
        // Route::get('/edit/{media}', [MediaWebController::class, 'edit'])->name(
        //     'media.edit'
        // );
        Route::post('/', [MediaWebController::class, 'store'])->name('media.store');
        Route::patch('/{media}', [MediaWebController::class, 'update'])->name(
            'media.update'
        );
        Route::delete('/{media}', [MediaWebController::class, 'destroy'])->name(
            'media.destroy'
        );
    });
    Route::prefix('cek_umur')->group(function () {
    Route::get('/', [CekUmurWebController::class, 'index'])->name(
        'cekumur.index'
    );
    Route::get('/{cekumur}', [CekUmurWebController::class, 'show'])->name(
        'cekumur.show'
    );
    Route::post('/', [CekUmurWebController::class, 'store'])->name(
        'cekumur.store'
    );
    Route::patch('/{cekumur}', [CekUmurWebController::class, 'update'])->name(
        'cekumur.update'
    );
    Route::delete('/{cekumur}', [CekUmurWebController::class, 'destroy'])->name(
        'cekumur.destroy'
    );
    });

    Route::prefix('jenis_syarat')->group(function () {
        Route::get('/', [JenisSyaratController::class, 'index'])->name(
            'jenissyarat.index'
        );
        Route::get('/{jenissyarat}', [JenisSyaratController::class, 'show'])->name(
            'jenissyarat.show'
        );
        Route::post('/', [JenisSyaratController::class, 'store'])->name(
            'jenissyarat.store'
        );
        Route::patch('/{jenissyarat}', [
            JenisSyaratController::class,
            'update',
        ])->name('jenissyarat.update');
        Route::delete('/{jenissyarat}', [
            JenisSyaratController::class,
            'destroy',
        ])->name('jenissyarat.destroy');
    });


    Route::prefix('/generate')->group(function(){
        Route::get('/counter/galeri/{id}/{count}',[App\Http\Controllers\GaleriController::class,'generateCounter']);
        Route::get('/counter/all-galeri/{act}/{count}',[App\Http\Controllers\GaleriController::class,'generateAllGaleriCounter']);
        Route::get('/counter/post/{id}/{count}',[App\Http\Controllers\PostController::class,'generateCounter']);
        Route::get('/counter/all-post/{act}/{count}',[App\Http\Controllers\PostController::class,'generateAllPostCounter']);

    });

});
