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
        Route::get('/', [ClientController::class, 'index'])->name('admin.clients.index');
        Route::get('/clients/create', [ClientController::class, 'create'])->name('admin.clients.create');
        Route::post('/clients', [ClientController::class, 'store'])->name('admin.clients.store');
        Route::delete('/clients/{client}', [ClientController::class, 'destroy'])->name('admin.clients.destroy');
        Route::get('/clients/{client}', [ClientController::class, 'show'])->name('admin.clients.show');
        Route::put('/clients/{client}', [ClientController::class, 'update'])->name('admin.clients.update');

        //Document routes
        Route::get('/documents', [DocumentController::class, 'index'])->name('admin.documents.index');
        Route::get('/documents/create', [DocumentController::class, 'create'])->name('admin.documents.create');
        Route::get('/documents/download/{id}', [DocumentController::class, 'download'])->name('admin.documents.download');
        Route::get('/documents/{id}', [DocumentController::class, 'show'])->name('admin.documents.show');
        Route::put('/documents/{id}', [DocumentController::class, 'update'])->name('admin.documents.update');
        Route::post('/documents', [DocumentController::class, 'store'])->name('admin.documents.store');
        Route::delete('/documents/{document}', [DocumentController::class, 'destroy'])->name('admin.documents.destroy');

        //Booking routes
        Route::get('/bookings', [BookingController::class, 'index'])->name('admin.bookings.index');
        Route::get('/bookings/create', [BookingController::class, 'create'])->name('admin.bookings.create');
        Route::post('/bookings', [BookingController::class, 'store'])->name('admin.bookings.store');
        Route::delete('/bookings/{booking}', [BookingController::class, 'destroy'])->name('admin.bookings.destroy');

        //Hour routes
        Route::get('/hours', [HourController::class, 'index'])->name('admin.hours.index');
        Route::get('/hours/create', [HourController::class, 'create'])->name('admin.hours.create');
        Route::post('/hours', [HourController::class, 'store'])->name('admin.hours.store');
        Route::delete('/hours/{hour}', [HourController::class, 'destroy'])->name('admin.hours.destroy');
        Route::get('/hours/{hour}', [HourController::class, 'show'])->name('admin.hours.show');

        //Config routes
        Route::get('/configs', [ConfigController::class, 'index'])->name('admin.configs.index');


    })->middleware(['auth'])->name('admin');


require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
