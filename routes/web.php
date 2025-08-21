<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('guest.home');
})->name('home');
include __DIR__ . '/route_group/guest/general_route.php';

Route::get('/login_form', function () {
    return view('login');
})->name('login');

Route::get('locale/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'mm'])) {
        session(['locale' => $locale]);
    }
    return back();
})->name('locale.set');
