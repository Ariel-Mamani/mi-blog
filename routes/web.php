<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/categoria/{id}', [CategoryController::class, 'postsPorCategoria'])->name('publica.categoria');

Route::get('/inicio', [PostController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::resource('posts', PostController::class);

Route::get('/inicio/categoria/{id}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('/inicio/mis-posts', [PostController::class, 'misPosts'])->name('posts.misposts')->middleware(['auth', 'verified']);

Route::get('/post/edit/{id}', [PostController::class, 'getEdit'])->middleware(['auth', 'verified'])->name('posts.edit');

Route::patch('/postt/edit/{id}', [PostController::class, 'update'])->name('posts.update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
