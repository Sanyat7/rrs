@extends('layouts.main')

@section('content')

    <div class="row">
        <div style="width:98%; height: 500px; margin-top:40px; background: white">
            <div class="row" style="margin-left: 30px">
                <div class="row">
                    <h2>Routes</h2>
                </div>
                <div class="row">
                    <a href="{{route('createRoute')}}" class="btn btn-default">+ Add New Route</a>
                </div>
            </div>
        </div>
    </div>
@endsection
