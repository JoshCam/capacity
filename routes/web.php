<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ClubController;
use Illuminate\Support\Facades\Route;

Route::get('home', [AuthenticatedSessionController::class, 'checkUserRole']);

// Admin Routes
Route::middleware([])->prefix('admin')->group(function () {

    // Route to logged in admins specific club
    Route::get("/", [ClubController::class, 'showAdmin'])->name('admin.show');

    // Edit Club details
    Route::get("/update", [ClubController::class, 'storeAdmin'])->name('admin.store');

});


// User Routes
Route::group([], function () {

    // Home Route
    Route::get("/", [ClubController::class, 'index'])->name('clubs.index');

    // Route to show specific club
    Route::get("/show", [ClubController::class, 'show']);

    // Access to resources
    Route::resource("clubs", ClubController::class)->except(['index',]);

});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
