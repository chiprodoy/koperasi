<?php

use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class,'index'])->name('index');
Route::get('/kategori/{kategori-slug}', [WelcomeController::class,'category'])->name('guest.post.category');
Route::get('/post/{slug}', [WelcomeController::class,'post'])->name('guest.post.detail');

Route::get('privacy', function(){
    return view('kebijakan_privasi');
});


/*** Route::get('/post', function () {
    return view('welcome');
})->name('post');
**/
require __DIR__.'/auth.php';
require __DIR__.'/admin.php';

