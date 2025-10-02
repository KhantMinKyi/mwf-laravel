<?php

use App\Http\Controllers\HomeController;
use App\Models\Committee;
use App\Models\Post;
use App\Models\Achement;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = Post::where('post_is_active', 1)->where('post_is_show_front', 1)->orderBy('post_created_date', 'desc')->get();
    $committees = Committee::where('committee_is_show_front', 1)->orderBy('created_at', 'asc')->limit(4)->get();
    $achements = Achement::orderBy('achement_year', 'desc')->get();
    return view('guest.home', compact('posts', 'committees', 'achements'));
})->name('home');
Route::group(['prefix' => '/guest'], function () {
    Route::get('/news_detail/{id}', [HomeController::class, 'getNewsDetailPage'])->name('guest.news_detail');
    Route::get('/about_us', [HomeController::class, 'getAboutUsPage'])->name('guest.about_us');
    Route::get('/news', [HomeController::class, 'getNewsPage'])->name('guest.news');
    Route::get('/committee', [HomeController::class, 'getCommitteePage'])->name('guest.committee');
});
