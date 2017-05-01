<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RRS</title>
    <link href="{{asset('assets/css/Site.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('assets/js/modernizr-2.6.2.js')}}"></script>
    <script src="{{asset('assets/js/toggle.js')}}"></script>
 </head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">RRS</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#">Map <span class="sr-only">(current)</span></a></li>
                <li><a href="#">About</a></li>
                @if (Auth:: user())
                <li><a href="#">History</a></li>
                @endif
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/logout') }}">LogOut</a></li>

                    </ul>
                </li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    <h2>Logo</h2>
                </a>
                <hr width="70%" align="left" style="margin-left: 20px; border: 1px solid white">
            </li>
            <li style="margin-top: 50px">
                <a href="{{url('/')}}"> Map <i class="fa fa-map" aria-hidden="true" style="margin-left:150px"></i></a>
            </li>
            <li>
                <a href="#"> About <i class="fa fa-info" aria-hidden="true" style="margin-left:150px"></i></a>
            </li>
            @if (Auth:: user())
            <li>
                <a href="#"> Search History <i class="fa fa-file-text" aria-hidden="true" style="margin-left:80px"></i></a>
            </li>
            @endif
            <li>
                <a href="{{route('vehiclePage')}}"> Vehicles <i class="fa fa-phone" aria-hidden="true" style="margin-left:129px"></i></a>
            </li>
            <li>
                <a href="{{route('routePage')}}"> Routes <i class="fa fa-phone" aria-hidden="true" style="margin-left:129px"></i></a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="theMap">
        <iframe width="100%" height="100%" src="https://www.google.com/maps/embed/v1/view?zoom=21&center=27.7054%2C85.3267&key=AIzaSyCCo1-g_ELiAsbF6Lx_bDy59hsuhF2gi4s"></iframe>
    </div>
    <div id="page-content-wrapper" style="margin-left: 20px">
        <div style="margin-top: 50px"></div>
        @if (Auth:: guest())
        <div class="alert alert-info alert-dismissable" style="margin-right: 20px; margin-top: 50px">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Info!</strong> <a href="{{ url('/login') }}" class="alert-link">LogIn</a> to Save your Search History.
        </div>
        @endif
        <div class="container-fluid" style="margin-top: -50px">
            @yield('content')
        </div>
    </div>
</div>

    <script src="{{asset('assets/js/jquery-1.10.2.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>