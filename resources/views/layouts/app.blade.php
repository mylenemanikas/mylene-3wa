<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href={{asset("assets/skin/default_skin/css/theme.css")}}>

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href={{asset("assets/admin-tools/admin-forms/css/admin-forms.css")}}>

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>

<body class="external-page sb-l-c sb-r-c">


<!-- Start: Main -->
<div id="main" class="animated fadeIn">

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

        <!-- begin canvas animation bg -->
        <div id="canvas-wrapper">
            <canvas id="demo-canvas" width="1375" height="555"></canvas>
        </div>

        <!-- Begin: Content -->
        <section id="content" class="">

            <div class="admin-form theme-info mw700" style="margin-top: 3%;" id="login1">

                <div class="row mb15 table-layout">
                    <div class="col-xs-6 va-m pln">
                        <a href="dashboard.html" title="Return to Dashboard">
                            <img src="assets/img/logos/logo_white.png" title="AdminDesigns Logo" class="img-responsive w250">
                        </a>
                    </div>
                    <div class="col-xs-6 va-m pln">
                        <a href="dashboard.html" title="Return to Dashboard">
                           <!-- <img src="assets/img/logos/logo_white.png" title="AdminDesigns Logo" class="img-responsive w250">-->
                        </a>
                    </div>

                    <div class="col-xs-6 text-right va-b pr5">
                        <div class="login-links">
                            <ul class="nav navbar-nav navbar-right">
                                @if (Auth::guest())
                                <a href="{{ url('/login') }}" class="" title="Sign In">Sign In</a>
                                <span class="text-white"> | </span>
                                <a href="{{ url('/register') }}" class="active" title="Register">Register</a>
                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                        </ul>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <!-- Right Side Of Navbar -->

                    </div>
                    </div>
                </div>
@yield('content')

        </section>
        <!-- End: Content -->

    </section>
    <!-- End: Content-Wrapper -->
</div>



    <!-- JavaScripts -->
<!-- jQuery -->
<script src={{asset("vendor/jquery/jquery-1.11.1.min.js")}}></script>
<script src={{asset("vendor/jquery/jquery_ui/jquery-ui.min.js")}}></script>

<!-- CanvasBG Plugin(creates mousehover effect) -->
<script src={{asset("vendor/plugins/canvasbg/canvasbg.js")}}></script>


<!-- Page Javascript -->
<script type="text/javascript">
    jQuery(document).ready(function() {
        "use strict";
        // Init Theme Core
        Core.init();

        // Init Demo JS
        Demo.init();

        // Init CanvasBG and pass target starting location
        CanvasBG.init({
            Loc: {
                x: window.innerWidth / 2.1,
                y: window.innerHeight / 4.2
            },
        });
    });
</script>

<!-- END: PAGE SCRIPTS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
