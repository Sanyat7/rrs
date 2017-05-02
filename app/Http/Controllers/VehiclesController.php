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
        return view('vehicles');
    }

    public function create(){
        return view('vehiclesCreate');
    }

    public function store(Request $request){
        Vehicle::create($request->all());
        return redirect()->route('vehiclePage');
    }
}
