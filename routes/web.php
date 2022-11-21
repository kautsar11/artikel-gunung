<?php

use App\Http\Controllers\AuthorPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
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

Route::get('/', [PostController::class, 'index']);

Route::get('postingan/{post:nama_gunung}', [PostController::class, 'show']);

Route::prefix('author')->middleware(['auth'])->group(function () {
    Route::get('postingan-anda', [AuthorPostController::class, 'index'])->name('posts');
    Route::view('tambah-postingan', 'posts.create')->name('post.create.show');
    Route::post('simpan-postingan', [AuthorPostController::class, 'store'])->name('post.create.store');
    Route::delete('hapus-postingan/{post}', [AuthorPostController::class, 'destroy'])->name('post.destroy');
});


Route::group(['controller' => RegisterController::class, 'middleware' => 'guest'], function () {
    Route::get('register', 'index');
    Route::post('register', 'store');
});

Route::group(['controller' => SessionController::class], function () {
    Route::middleware('guest')->group(function () {
        Route::view('login', 'session.create')->name('login');
        Route::post('login', 'store');
    });

    Route::post('logout', 'destroy')->middleware('auth');
});
