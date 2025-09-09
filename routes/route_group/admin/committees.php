<?php

use App\Http\Controllers\CommitteeController;
use Illuminate\Support\Facades\Route;

Route::resource('committees',CommitteeController::class)->names('admin.committees');
Route::get('archived-committee/{id}', [CommitteeController::class, 'archivedCommittee'])->name('admin.committees.archived_committee');