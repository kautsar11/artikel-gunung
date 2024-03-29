<?php

use App\Http\Controllers\AuthorPostController;
use App\Http\Controllers\CommentPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::controller(PostController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('posts/{post:nama_gunung}', 'show');
});

Route::view('info-lainnya', 'posts.info_lainnya');

Route::group(
    [
        'prefix' => 'admin',
        'middleware' => ['auth'],
        'controller' => AuthorPostController::class
    ],
    function () {
        Route::get('posts', 'index')->name('posts');
        Route::get('posts/create', 'create')->name('post.create.show');
        Route::post('posts', 'store')->name('post.create.store');
        Route::get('posts/{post}/edit', 'edit');
        Route::patch('posts/{post}', 'update');
        Route::delete('posts/{post}', 'destroy')->name('post.destroy');
    }
);

Route::group(['controller' => CommentPostController::class, 'middleware' => ['auth']], function () {
    Route::post('posts/{post:nama_gunung}/comments', 'store');
    Route::delete('posts/comments/{comment}', 'destroy');
});


Route::group(['controller' => RegisterController::class, 'middleware' => 'guest'], function () {
    Route::get('register', 'index');
    Route::post('register', 'store');
});

Route::group(['controller' => LoginController::class], function () {
    Route::middleware('guest')->group(function () {
        Route::view('login', 'login.login')->name('login');
        Route::post('login', 'store');
    });

    Route::post('logout', 'destroy')->middleware('auth');
});
