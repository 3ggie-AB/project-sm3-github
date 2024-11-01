<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('component.master');
});

Route::prefix('users')->group(function () {
    Route::get('/table', [UserController::class, 'index'])->name('users.index');
    Route::get('/card', [UserController::class, 'card'])->name('users.card');
});

Route::prefix('todos')->group(function () {
    Route::get('/table', [TodoController::class, 'index'])->name('todos.index');
    Route::get('/card', [TodoController::class, 'card'])->name('todos.card');
});
