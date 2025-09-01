<?php

use App\Http\Controllers\HomeController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = Post::where('post_is_active',1)->where('post_is_show_front',1)->orderBy('post_created_date','desc')->get();
    return view('guest.home',compact('posts'));
})->name('home');
Route::group(['prefix' => '/guest'], function () {
    Route::get('/about_us', [HomeController::class, 'getAboutUsPage'])->name('guest.about_us');
    Route::get('/news', [HomeController::class, 'getNewsPage'])->name('guest.news');
    Route::get('/committee', [HomeController::class, 'getCommitteePage'])->name('guest.committee');
});
