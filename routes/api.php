<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ForumKomenController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediaController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', [RegisteredUserController::class, 'store']);

Route::post('login', [AuthenticatedSessionController::class, 'store']);

// Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
//             ->name('password.email');

Route::post('reset-password', [NewPasswordController::class, 'store'])
    ->name('password.update');

Route::middleware('auth:sanctum')->post('/fcm_token/{fcmToken}', [UserController::class, 'setFcmToken']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('post')->group(function () {
    Route::post('/{uuid}/{activity}', [PostController::class, 'updatePostActivity']);
    Route::get('/', [PostController::class, 'index'])->name('post.index');

    Route::get('/category/{slug}', [PostController::class, 'indexByCategory'])->name('post.category');

    Route::get('/{slug}', [PostController::class, 'show'])->name('post.show');
    Route::middleware('auth:sanctum')->post('/category/{categoryslug}/create', [App\Http\Controllers\PostController::class, 'browseStore'])->name('browse.store');
});

Route::prefix('page')->group(function () {
    Route::post('/{uuid}/{activity}', [PostController::class, 'updatePostActivity']);
    Route::get('/', [PageController::class, 'index'])->middleware('auth:sanctum')->name('page.index');
    Route::get('/{slug}', [PageController::class, 'show'])->name('page.show');
});
/*
 *
Route::prefix('media')->group(function(){

    Route::get('/',[PostController::class,'index'])->middleware('auth:sanctum')->name('media.index');

    Route::get('/category/{slug}',[PostController::class,'indexByCategory'])->name('media.category');

    Route::get('/{slug}',[PostController::class,'show'])->name('media.show');

});
 */


Route::prefix('post_category')->group(function () {
    Route::get('/', [PostCategoryController::class, 'index'])->name('post_category.index');
});


Route::prefix('init')->group(function () {
    Route::get('/storage', function () {
        $target = storage_path('app/public');
        $shortcut = '/home/sdmpolda/public_html/pakkepo/public/storage';
        echo $target . ":";
        echo $shortcut;
        Artisan::call('storage:link');

        return ['target' => $target, 'shortcut' => $shortcut];
    });
});

/* Route::prefix('dikbang')->group(function(){

    // display kategori
    Route::get('/',[PostCategoryController::class,'index'])->middleware('auth:sanctum')->name('dikbang.index');

    Route::get('/{category}',[PostController::class,'indexByCategory'])->name('dikbang.category');

    Route::get('/{category}/{slug}',[PostController::class,'showByKategori'])->name('dikbang.show');

});
 */
Route::prefix('forum')->group(function () {
    Route::get('/', [ForumController::class, 'index']);
    Route::get('/{forum}', [ForumController::class, 'show']);
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/', [ForumController::class, 'store']);
        Route::patch('/{forum}', [ForumController::class, 'update']);
        Route::delete('/{forum}', [ForumController::class, 'destroy']);
    });
});

Route::prefix('forum_komen')->group(function () {
    Route::get('/{forum}', [ForumKomenController::class, 'index']);
    Route::get('/{forum}/{forumKomen}', [ForumKomenController::class, 'show']);
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/{forum}', [ForumKomenController::class, 'store']);
        Route::patch('/{forum}/{forumKomen}', [
            ForumKomenController::class,
            'update',
        ]);
        Route::delete('/{forumKomen}', [
            ForumKomenController::class,
            'destroy',
        ]);
    });
});

Route::prefix('galeri')->group(function () {
    Route::get('/', [GaleriController::class, 'index'])->name('galeri.index');

    Route::get('/{galeri}', [GaleriController::class, 'show'])->name(
        'galeri.show'
    );
    Route::post('/{id}/{activity}', [GaleriController::class, 'updateCounterActivity'])->name(
        'galeri.logactivity'
    );
});


Route::prefix('media')->group(function () {
    Route::get('/', [MediaController::class, 'index']);
    Route::get('/{media}', [MediaController::class, 'show']);
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/', [MediaController::class, 'store']);
        Route::patch('/{media}', [MediaController::class, 'update']);
        Route::delete('/{media}', [MediaController::class, 'destroy']);
    });
});


Route::prefix('comment')->group(function () {
    Route::middleware('auth:sanctum')->post('/', [CommentController::class, 'store']);
});
