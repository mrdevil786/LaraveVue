<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;

Route::get('/', [BasicController::class, 'home'])->name('home');
Route::get('/about', [BasicController::class, 'about'])->name('about');
Route::get('/contact', [BasicController::class, 'contact'])->name('contact');
Route::post('/contact', [BasicController::class, 'submitContact'])->name('contact.submit');
Route::get('/forms', [BasicController::class, 'forms'])->name('forms');
Route::get('/contact/{contact}/edit', [BasicController::class, 'edit'])->name('contact.edit');
Route::put('/contact/{contact}', [BasicController::class, 'update'])->name('contact.update');
Route::delete('/contact/{contact}', [BasicController::class, 'destroy'])->name('contact.destroy');
