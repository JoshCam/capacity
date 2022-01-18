<?php

use App\Http\Controllers\ClubController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// API to update current occupancy of club
Route::put('/clubs/{club}', [ClubController::class, 'updateOccupancy'])->name('clubs.updateOccupancy');

// API to search clubs in DB
Route::get('/clubs', [clubController::class, 'getClubs'])->name('clubs.search');

Route::post('/radius', [clubController::class, 'getClubsInRadius'])->name('clubs.ClubsInRadius');