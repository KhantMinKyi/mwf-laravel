<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::resource('posts',PostController::class)->names('admin.posts');
Route::get('archived-post/{id}', [PostController::class, 'archivedPost'])->name('admin.posts.archived_post');