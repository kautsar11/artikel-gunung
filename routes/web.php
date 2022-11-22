<?php

use App\Http\Controllers\AuthorPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController::class, 'index']);

Route::get('posts/{post:nama_gunung}', [PostController::class, 'show']);

Route::middleware(['auth'])->group(function () {
    Route::get('author/posts', [AuthorPostController::class, 'index'])->name('posts');
    Route::get('author/posts/create', [AuthorPostController::class, 'create'])->name('post.create.show');
    Route::post('author/posts', [AuthorPostController::class, 'store'])->name('post.create.store');
    Route::get('author/posts/{post}/edit', [AuthorPostController::class, 'edit']);
    Route::patch('author/posts/{post}', [AuthorPostController::class, 'update']);
    Route::delete('author/posts/{post}', [AuthorPostController::class, 'destroy'])->name('post.destroy');
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
