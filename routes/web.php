<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('guest.home');
})->name('home');
include __DIR__ . '/route_group/guest/general_route.php';


Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'mm'])) {
        session(['locale' => $locale]);
    }
    return back();
});
