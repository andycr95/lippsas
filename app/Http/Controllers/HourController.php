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
        $date = date('Y-m-d');
        $hours = Hour::with(['bookings' => function ($query) use ($date) {
            $query->where('date_creation','>=', $date);
        }])->get();
        for ($i=0; $i < count($hours); $i++) { 
            if($hours[$i]->state == 'false' && $hours[$i]->date >= $date){
                $hours[$i]->state = 'true';
                $hours[$i]->date = null;
                $hours[$i]->time = null;
                $hours[$i]->save();
            } elseif($hours[$i]->state == 'true'){
                $hours[$i]->date = null;
                $hours[$i]->time = null;
                $hours[$i]->save();
            }
        }
        return response()->json($hours);
    }

    /**
     * Get all with bookings of the day recived by parameter
     */
    public function getAllWithBookingsOfTheDay(Request $request)
    {
        $date = $request->query('date');
        $type = $request->query('type');
        $today = date('Y-m-d');
        $hours = Hour::where('state', 'true')->with(['bookings' => function ($query) use ($date, $type) {
            $query->where('date_creation', $date)->where('type_booking_id', $type);
        }])->get();
        for ($i=0; $i < count($hours); $i++) { 
            if($hours[$i]->state == 'false' && $hours[$i]->date >= $today){
                $hours[$i]->state = 'true';
                $hours[$i]->date = null;
                $hours[$i]->time = null;
                $hours[$i]->save();
            } elseif($hours[$i]->state == 'true'){
                $hours[$i]->date = null;
                $hours[$i]->time = null;
                $hours[$i]->save();
            }
        }
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
        // Update the hour
        $hour = Hour::findOrFail($request->id);
        $hour->state = $request->input('state');
        if ($request->input('state') == false) {
            $hour->time = $request->input('time');
            $hour->date = $request->input('date');
        }
        $hour->save();
        return response()->json($hour);
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
