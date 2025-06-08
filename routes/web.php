<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

Route::get('/', [PostController::class, 'index'])->name('dashboard');

Route::get('/detalle/{id}', [PostController::class, 'verDetalle']);

Route::resource('posts', PostController::class);

Route::get('/categoria/{id}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('/mis-posts', [PostController::class, 'misPosts'])->name('posts.misposts')->middleware(['auth', 'verified']);

Route::get('/post/edit/{id}', [PostController::class, 'getEdit'])->middleware(['auth', 'verified'])->name('posts.edit');

Route::patch('/postt/edit/{id}', [PostController::class, 'update'])->name('posts.update');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
