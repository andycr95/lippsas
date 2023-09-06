<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HourController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ConfigController;

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
Route::get('/hours/withBookingsOfTheDay', [HourController::class, 'getAllWithBookingsOfTheDay']);
Route::put('/hours/{id}', [HourController::class, 'update']);

Route::get('/bookings', [BookingController::class, 'getAll']);
Route::post('/bookings', [BookingController::class, 'createBooking']);

Route::get('/documents/download/{id}', [DocumentController::class, 'download']);
Route::get('/documents/{nit}', [DocumentController::class, 'getDocumentsByClientNit']);

Route::get('/type-booking', [ConfigController::class, 'getAllTypeBooking']);
Route::post('/type-booking', [ConfigController::class, 'createTypeBooking']);

Route::get('/clients', [ClientController::class, 'getAll']);
