<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeBooking;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('pages.admin.configs.type_booking');
    }

    /**
     * Get all type booking
     */
    public function getAllTypeBooking(){
        $type_booking = TypeBooking::all();
        return response()->json($type_booking);
    }

    /**
     * Create a new type booking
     */
    public function createTypeBooking(Request $request){
        $type_booking = new TypeBooking();
        $type_booking->name = $request->name;
        $type_booking->weight = $request->weight;
        $type_booking->save();
        return response()->json($type_booking);
    }
}
