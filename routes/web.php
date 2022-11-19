<?php

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
Route::prefix('author')->group(function () {
    Route::get('postingan-anda', [PostController::class, 'allPost']);
    Route::view('tambah-postingan', 'posts.create');
});



Route::group(['controller' => RegisterController::class, 'middleware' => 'guest'], function () {
    Route::get('register', 'index');
    Route::post('register', 'store');
});

Route::group(['controller' => SessionController::class], function () {
    Route::middleware('guest')->group(function () {
        Route::view('login', 'session.create');
        Route::post('login', 'store');
    });
    Route::post('logout', 'destroy')->middleware('auth');
});
