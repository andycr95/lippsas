<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\Client;
use App\Models\Hour;
use Mail;
use Illuminate\Http\Request;
use App\Mail\SendBookingMailClient;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = booking::with('client')->with('hour')->get();
        return view('pages.admin.booking.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hours = Hour::all();
        return view('pages.admin.booking.create', compact('hours'));
    }

    /**
     * Api get all bookings
     */
    public function getAll()
    {
        $bookings = booking::with(['client', 'hour', 'typeBooking'])->orderBy('date_creation', 'desc')->get();
        return response()->json($bookings);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Api create booking
     */
    public function createBooking(Request $request)
    {
        $booking = new booking();
        $booking->hour_id = $request->hour_id;
        $booking->client_id = $request->client_id;
        $booking->date_creation = $request->date;
        $booking->plate = $request->plate;
        $booking->type_booking_id = $request->type;
        $booking->description = $request->description;
        $client = Client::find($request->client_id);
        $booking->save();

        Mail::to('andy.caicedo@sigma7.com.co', 'Sigma')->send(new SendBookingMailClient($client, $booking));

        return response()->json([
            'message' => 'Booking created successfully',
            'booking' => $booking
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(booking $booking)
    {
        //
    }
}
