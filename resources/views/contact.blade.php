@extends('layouts.master')

@section('content')

    <div id="theMap">
        <iframe width="100%" height="100%" src="https://www.google.com/maps/embed/v1/view?zoom=21&center=27.7054%2C85.3267&key=AIzaSyCCo1-g_ELiAsbF6Lx_bDy59hsuhF2gi4s"></iframe>
    </div>
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle" style="background: white"><span style="font-size: 16px"><i class="fa fa-bars" aria-hidden="true"></i></span> </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default" style="width:35%; margin-top:40px">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

@endsection