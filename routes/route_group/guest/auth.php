<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/administration-panel/login', function () {
    return view('pages.login');
})->name('show.login');
Route::post('/administration-panel/login', [AuthController::class, 'login'])->name('login');
Route::post('/administration-panel/logout', [AuthController::class, 'logout'])->name('logout');
