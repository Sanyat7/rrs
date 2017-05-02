@extends('layouts.main')

@section('content')

    <div class="row">
        <div style="width:98%; height: 592px; margin-top:40px; background: white">
            <div class="row" style="margin-left: 30px">
                <div class="row">
                    <h2>Vehicles</h2><br />
                    <h3>Add New Vehicle</h3>
                </div>
                <div class="row">
                    <div>
                        @foreach($errors->all() as $error)
                            {{$error}}
                        @endforeach
                    </div>
                    <form class="form-horizontal" action="{{route('postCreateVehicle')}}" role="form" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="startPoint">Vehicle Name:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="vehicleName" placeholder="Enter vehicleName">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
