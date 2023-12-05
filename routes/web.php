<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\HourController;
use App\Http\Controllers\ConfigController;
use Illuminate\Support\Facades\Route;
use App\Models\Hour;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

    Route::get('/', function () {
        $hours = Hour::all();
        return view('pages.principal.index', compact('hours'));
    });

    Route::get('/nosotros', function () {
        return view('pages.principal.about');
    });

    Route::get('/servicios', function () {
        return view('pages.principal.services');
    });

    Route::get('/contacto', function () {
        return view('pages.principal.contact');
    });

    //Admin group routes
    Route::group(['prefix' => 'admin'], function () {

        //Client routes
        Route::get('/', [ClientController::class, 'index'])->name('admin.clients.index')->middleware(['auth']);
        Route::get('/clients/create', [ClientController::class, 'create'])->name('admin.clients.create')->middleware(['auth']);
        Route::post('/clients', [ClientController::class, 'store'])->name('admin.clients.store')->middleware(['auth']);
        Route::delete('/clients/{client}', [ClientController::class, 'destroy'])->name('admin.clients.destroy')->middleware(['auth']);
        Route::get('/clients/{client}', [ClientController::class, 'show'])->name('admin.clients.show')->middleware(['auth']);
        Route::put('/clients/{client}', [ClientController::class, 'update'])->name('admin.clients.update')->middleware(['auth']);

        //Document routes
        Route::get('/documents', [DocumentController::class, 'index'])->name('admin.documents.index')->middleware(['auth']);
        Route::get('/documents/create', [DocumentController::class, 'create'])->name('admin.documents.create')->middleware(['auth']);
        Route::get('/documents/download/{id}', [DocumentController::class, 'download'])->name('admin.documents.download')->middleware(['auth']);
        Route::get('/documents/{id}', [DocumentController::class, 'show'])->name('admin.documents.show')->middleware(['auth']);
        Route::put('/documents/{id}', [DocumentController::class, 'update'])->name('admin.documents.update')->middleware(['auth']);
        Route::post('/documents', [DocumentController::class, 'store'])->name('admin.documents.store')->middleware(['auth']);
        Route::delete('/documents/{document}', [DocumentController::class, 'destroy'])->name('admin.documents.destroy')->middleware(['auth']);

        //Booking routes
        Route::get('/bookings', [BookingController::class, 'index'])->name('admin.bookings.index')->middleware(['auth']);
        Route::get('/bookings/create', [BookingController::class, 'create'])->name('admin.bookings.create')->middleware(['auth']);
        Route::post('/bookings', [BookingController::class, 'store'])->name('admin.bookings.store')->middleware(['auth']);
        Route::delete('/bookings/{booking}', [BookingController::class, 'destroy'])->name('admin.bookings.destroy')->middleware(['auth']);

        //Hour routes
        Route::get('/hours', [HourController::class, 'index'])->name('admin.hours.index')->middleware(['auth']);
        Route::get('/hours/create', [HourController::class, 'create'])->name('admin.hours.create')->middleware(['auth']);
        Route::post('/hours', [HourController::class, 'store'])->name('admin.hours.store')->middleware(['auth']);
        Route::delete('/hours/{hour}', [HourController::class, 'destroy'])->name('admin.hours.destroy')->middleware(['auth']);
        Route::get('/hours/{hour}', [HourController::class, 'show'])->name('admin.hours.show')->middleware(['auth']);

        //Config routes
        Route::get('/configs', [ConfigController::class, 'index'])->name('admin.configs.index')->middleware(['auth']);


    });


require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
