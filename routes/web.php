<?php

use App\Http\Controllers\ChirpController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

Route::get('/chirp/user', [ChirpController::class, 'chirp'])->name('chirp.user')->middleware('auth');
Route::get('/chirp/edit/{chirp}', [ChirpController::class, 'edit'])->name('chirp.edit')->middleware('auth');

