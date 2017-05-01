<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Http\Requests;

class VehiclesController extends Controller
{
    public function index()
    {
        return view('vehicles');
    }

    public function create(){
        return view('vehiclesCreate');
    }

    public function store(Requests\addVehicle $request){
        Vehicle::create($request->all());
        return redirect()->route('createVehicle');
    }
}
