@extends('layouts.main')

@section('content')

    <div class="row">
        <div style="width:98%; height: 592px; margin-top:40px; background: white">
            <div class="row" style="margin-left: 30px">
                <div class="row">
                    <h2>Routes</h2>
                </div>
                <div class="row">
                    <a href="{{route('createRoute')}}" class="btn btn-default">+ Add New Route</a>
                </div>
                <div class="row" style="margin-top:20px">
                    <table class="table table-bordered" style="width:95%" >
                        <tr>
                            <th>Start Point</th>
                            <th>End Point</th>
                            <th>Vehicles Available</th>
                            <th>Cost</th>
                            <th>Average Time</th>
                            <th>Action</th>
                        </tr>
                        @foreach($thisRoutes as $thisRoute)
                            <tr>
                                <td>{{  $thisRoute->startPoint }}</td>
                                <td>{{  $thisRoute->endPoint }}</td>
                                <td>{{  $thisRoute->vehicles }}</td>
                                <td>{{  $thisRoute->cost }}</td>
                                <td>{{  $thisRoute->time }}</td>
                                <td><a href="{{route('deleteRoute', $thisRoute->id)}}">Delete</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
