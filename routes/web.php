<?php

use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;

// Guest Routes
include __DIR__ . '/route_group/guest/general_route.php';
include __DIR__ . '/route_group/guest/auth.php';

// Admin Routes
Route::group(['middleware' => ['auth', IsAdmin::class], 'prefix' => '/administration-panel/admin'], function () {
    Route::get('dashborad', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    include __DIR__ . '/route_group/admin/posts.php';
    include __DIR__ . '/route_group/admin/committees.php';
    include __DIR__ . '/route_group/admin/achements.php';
});


// Global Routes
Route::get('/login_form', function () {
    return view('login');
})->name('login');

Route::get('locale/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'mm'])) {
        session(['locale' => $locale]);
    }
    return back();
})->name('locale.set');
