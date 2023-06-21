<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HourController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DocumentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/hours', [HourController::class, 'getAll']);
Route::get('/hours/withBookingsOfTheDay/{date}', [HourController::class, 'getAllWithBookingsOfTheDay']);

Route::post('/bookings', [BookingController::class, 'createBooking']);

Route::get('/documents/download/{id}', [DocumentController::class, 'download']);
Route::get('/documents/{nit}', [DocumentController::class, 'getDocumentsByClientNit']);
