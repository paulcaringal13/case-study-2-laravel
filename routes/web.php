<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function() {
    return view('login');
})->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.request');


Route::get('/register', function() {
    return view('register');
})->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.request');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/posts', [PostController::class, 'index'])->name('home');
    Route::post('create', [PostController::class, 'store'])->name('create');
    Route::get('show/{id}', [PostController::class, 'show'])->name('show');
    Route::get('edit/{id}', [PostController::class, 'edit'])->name('edit');
    Route::put('update/{id}', [PostController::class, 'update'])->name('update');
    Route::delete('delete/{id}', [PostController::class, 'destroy'])->name('delete');

    Route::get('/posts/create', function () {
        return view('posts.create');
    })->name('posts.create');

});



