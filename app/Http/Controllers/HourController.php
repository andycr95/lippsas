<?php

namespace App\Http\Controllers;

use App\Models\Hour;
use Illuminate\Http\Request;

class HourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hours = Hour::all();
        return view('pages.admin.hours.index', compact('hours'));
    }

    /**
     * Get all hours
     */
    public function getAll()
    {
        $hours = Hour::with('bookings')->get();
        return response()->json($hours);
    }

    /**
     * Get all with bookings of the day recived by parameter
     */
    public function getAllWithBookingsOfTheDay($date)
    {
        $hours = Hour::with(['bookings' => function ($query) use ($date) {
            $query->where('created_at', $date);
        }])->get();
        return response()->json($hours);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.hours.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Create a new hour
        $hour = new Hour();
        $hour->hour = $request->input('hour');
        $hour->save();
        return redirect()->route('admin.hours.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hour $hour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hour $hour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hour $hour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hour $hour)
    {
        //Delete the hour
        $hour->delete();
        return redirect()->route('admin.hours.index');
    }
}
