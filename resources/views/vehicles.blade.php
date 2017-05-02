@extends('layouts.main')

@section('content')

    <div class="row">
        <div style="width:98%; height: 592px; margin-top:40px; background: white">
            <div class="row" style="margin-left: 30px">
                <div class="row">
                    <h2>Vehicles</h2>
                </div>
                <div class="row">
                    <a href="{{route('createVehicle')}}" class="btn btn-default">+ Add New Vehicle</a>
                </div>
                <div class="row" style="margin-top:20px">
                    <table class="table table-bordered" style="width:95%" >
                        <tr>
                            <th>Vehicle Name</th>
                            <th>Action</th>
                        </tr>
                        @foreach($vehicles as $vehicle)
                            <tr>
                                <td>{{  $vehicle->vehicleName }}</td>
                                <td><a href="{{route('deleteVehicle', $vehicle->id)}}">Delete</a> | <a href="{{route('editVehicle', $vehicle->id)}}">Edit</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
