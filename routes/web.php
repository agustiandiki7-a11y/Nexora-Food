
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;


Route::get('/', [CategoryController::class, 'index'])
    ->name('home');

Route::get('/kategori', [CategoryController::class, 'index'])
    ->name('categories.index');

Route::get('/kategori/create', [CategoryController::class, 'create'])
    ->name('categories.create');

Route::post('/kategori/store', [CategoryController::class, 'store'])
    ->name('categories.store');

Route::get('/kategori/{id}/edit', [CategoryController::class, 'edit'])
    ->name('categories.edit');

Route::put('/kategori/{id}', [CategoryController::class, 'update'])
    ->name('categories.update');

Route::delete('/kategori/{id}', [CategoryController::class, 'destroy'])
    ->name('categories.destroy');
