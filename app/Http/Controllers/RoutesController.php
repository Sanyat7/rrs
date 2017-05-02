<?php

namespace App\Http\Controllers;

use App\Models\thisRoute;
use Illuminate\Http\Request;
use App\Http\Requests;

class RoutesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('routes');
    }

    public function create(){
        return view('routesCreate');
    }

    public function store(Request $request){
        thisRoute::create($request->all());
        return redirect()->route('routePage');
    }
}
