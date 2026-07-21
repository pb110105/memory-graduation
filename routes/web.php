<?php

use App\Http\Controllers\MemoryPostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/memories', [MemoryPostController::class, 'index'])
    ->name('memories.index');

Route::post('/memories', [MemoryPostController::class, 'store'])
    ->middleware('throttle:10,1')
    ->name('memories.store');