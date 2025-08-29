<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('guest.home');
})->name('home');
Route::group(['prefix' => '/guest'], function () {
    Route::get('/about_us', [HomeController::class, 'getAboutUsPage'])->name('guest.about_us');
    Route::get('/news', [HomeController::class, 'getNewsPage'])->name('guest.news');
    Route::get('/committee', [HomeController::class, 'getCommitteePage'])->name('guest.committee');
});
