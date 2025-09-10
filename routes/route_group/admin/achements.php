<?php

use App\Http\Controllers\AchementController;
use App\Http\Controllers\CommitteeController;
use Illuminate\Support\Facades\Route;

Route::resource('achements',AchementController::class)->names('admin.achements');
Route::get('archived-achement/{id}', [AchementController::class, 'archivedAchement'])->name('admin.achements.archived_achement');