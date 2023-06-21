<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\Client;
use App\Models\Hour;
use Illuminate\Http\Request;

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
        $client = Client::where('nit', $request->nit)->first();
        if (!$client) {
            $client = new Client();
            $client->name = $request->name_company;
            $client->nit = $request->nit;
            $client->email = $request->email;
            $client->phone = $request->phone;
            $client->save();
        }
        $booking = new booking();
        $booking->hour_id = $request->hour_id;
        $booking->client_id = $client->id;
        $booking->date_creation = $request->date;
        $booking->save();

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
