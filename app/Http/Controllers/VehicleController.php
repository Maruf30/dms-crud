<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{

    public function index()
    {
        return view('dms.vehicle.vehicle');
    }

    public function vehicle_get()
    {
        $vehicles = Vehicle::all();
        return response()->json($vehicles);
    }
}
