@extends('layouts.main')

@section('content')

    <div class="row">
        <div style="width:98%; height: 500px; margin-top:40px; background: white">
            <div class="row" style="margin-left: 30px">
                <div class="row">
                    <h2>Routes</h2><br />
                    <h3>Add New Route</h3>
                </div>
                <div class="row">
                    <div>
                        @foreach($errors->all() as $error)
                            {{$error}}
                        @endforeach
                    </div>
                    <form class="form-horizontal" action="{{route('postCreateRoute')}}" role="form" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="startPoint">Start Point:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="startPoint" placeholder="Enter starting point">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="endPoint">End Point:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="endPoint" placeholder="Enter End Point">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="vehicles">Vehicles:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="vehicles" placeholder="Enter Vehicles">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="cost">Cost:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="cost" placeholder="Enter cost">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="time">Average Time:</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" name="time" placeholder="Enter time">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">Save </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
