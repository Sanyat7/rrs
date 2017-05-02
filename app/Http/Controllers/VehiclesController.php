<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Http\Requests;

class VehiclesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $vehicles = Vehicle::all();
        return view('vehicles', ['vehicles' => $vehicles]);
    }

    public function create(){
        return view('vehiclesCreate');
    }

    public function store(Request $request){
        Vehicle::create($request->all());
        return redirect()->route('vehiclePage');
    }

    function deleteVehicle($id) {
        $vehicle = Vehicle::find($id);
        $vehicle->delete();
        return redirect()->route('vehiclePage');
    }

    function viewEditVehicle( $id ) {
        $vehicle = Vehicle::find($id);
        return view('editVehicle', ['vehicle' => $vehicle]);
    }

    function postUpdateVehicle( Request $request, $id ) {
        $vehicle = Vehicle::find($id);
        $vehicle->update( $request->all());
        return redirect()->route('vehiclePage');
    }
}
