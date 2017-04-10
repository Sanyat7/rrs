@extends('layouts.main')

@section('content')

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default" style="width:35%; margin-top:40px">
                        <form class="form-horizontal" style="margin-top:15px; margin-left:10px; margin-right:10px">
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="start">Start Point:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="start" name="start">
                                </div>
                                <div class="col-sm-1" style="margin-left:-33px">
                                    <button class="btn btn-default"><i class="fa fa-map-marker" aria-hidden="true"></i></button>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="destinatiom">Destination:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="destination" name="destination">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-8">
                                    <button type="submit" class="btn btn-default">Get Route &nbsp<i class="fa fa-location-arrow" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection
