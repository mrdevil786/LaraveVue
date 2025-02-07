<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;

Route::get('/', [BasicController::class, 'home']);
Route::get('/about', [BasicController::class, 'about']);
Route::get('/contact', [BasicController::class, 'contact']);
Route::post('/contact', [BasicController::class, 'submitContact']);
Route::get('/forms', [BasicController::class, 'forms'])->name('forms');
Route::get('/contact/{contact}/edit', [BasicController::class, 'edit']);
Route::put('/contact/{contact}', [BasicController::class, 'update']);
Route::delete('/contact/{contact}', [BasicController::class, 'destroy']);
