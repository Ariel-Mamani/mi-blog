<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/inicio/detalle/{id}', [PostController::class, 'verDetalle']);

Route::get('/inicio', [PostController::class, 'index'])->name('dashboard');

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
