<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\EventController;
use App\Models\Club;
use Illuminate\Support\Facades\Route;

Route::get('home', [AuthenticatedSessionController::class, 'checkUserRole']);

// Admin Routes
// Need to register some middleware to check if user accessing this route has the admin role
Route::middleware("can:viewAny," . Club::class)->prefix('admin')->group(function () {

    // Route to show logged in admins their club
    Route::get("/", [ClubController::class, 'showAdmin'])->name('admin.show');

    // Route to show logged in admins their club clicker
    Route::get("/clicker", [ClubController::class, 'showClicker'])->name('admin.showClicker');

    // Access to all Event Resources
    Route::resource("events", EventController::class);

    // Route to add an event to a club
    Route::middleware('can:update,club')->post('clubs/{club}/events', [ClubController::class, 'storeEvent'])
    ->name('clubs.events.store');
});


// User Routes
Route::group([], function () {

    // Home Route
    Route::get("/", [ClubController::class, 'index'])->name('clubs.index');

    // Route to show specific club
    Route::get("/show", [ClubController::class, 'show']);

    // Access to resources
    Route::resource("clubs", ClubController::class)->except(['index',]);

    // Access to all Event Resources
    Route::resource("events", EventController::class)->except(['create','update']);

    // View nearby clubs
    Route::get("/nearby", [ClubController::class, 'getNearBy'])->name('clubs.nearBy');
});

// LOCAL ROUTES ONLY
if (app()->environment('local'))
{
    // Route::get('/tinker', [TinkerController::class, 'tinker'])->name('tinker');
    
    Route::get('/test', function () {
        return Club::first()->getOccupancy();
    });
}

// Default login dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
