<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            Laracinema- Admin pour Films
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Font CSS (Via CDN) -->
        <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
        <!-- FullCalendar Plugin CSS -->
        <link rel="stylesheet" type="text/css" href='{{asset("vendor/plugins/fullcalendar/fullcalendar.min.css")}}'>

        <!-- Theme CSS -->
        <link rel="stylesheet" type="text/css" href='{{asset("assets/skin/default_skin/css/theme.css")}}'>

        <!-- Admin Forms CSS -->
        <link rel="stylesheet" type="text/css" href='{{asset("assets/admin-tools/admin-forms/css/admin-forms.min.css")}}'>
        <link rel="stylesheet" type="text/css" href='{{asset("css/main.css")}}'>
        <!-- Favicon -->
        <link rel="shortcut icon" href='{{asset("assets/img/favicon.ico")}}'>
    </head>
        <body class="dashboard-page">
        <!-- Start: Theme Preview Pane -->
        <div id="skin-toolbox">
            <div class="panel">
                <div class="panel-heading">
        <span class="panel-icon">
          <i class="fa fa-gear text-primary"></i>
        </span>
                    <span class="panel-title"> Theme Options</span>
                </div>
                <div class="panel-body pn">
                    <ul class="nav nav-list nav-list-sm pl15 pt10" role="tablist">
                        <li class="active">
                            <a href="#toolbox-header" role="tab" data-toggle="tab">Navbar</a>
                        </li>
                        <li>
                            <a href="#toolbox-sidebar" role="tab" data-toggle="tab">Sidebar</a>
                        </li>
                        <li>
                            <a href="#toolbox-settings" role="tab" data-toggle="tab">Misc</a>
                        </li>
                    </ul>
                    <div class="tab-content p20 ptn pb15">
                        <div role="tabpanel" class="tab-pane active" id="toolbox-header">
                            <form id="toolbox-header-skin">
                                <h4 class="mv20">Header Skins</h4>
                                <div class="skin-toolbox-swatches">
                                    <div class="checkbox-custom checkbox-disabled fill mb5">
                                        <input type="radio" name="headerSkin" id="headerSkin8" checked value="">
                                        <label for="headerSkin8">Light</label>
                                    </div>
                                    <div class="checkbox-custom fill checkbox-primary mb5">
                                        <input type="radio" name="headerSkin" id="headerSkin1" value="bg-primary">
                                        <label for="headerSkin1">Primary</label>
                                    </div>
                                    <div class="checkbox-custom fill checkbox-info mb5">
                                        <input type="radio" name="headerSkin" id="headerSkin3" value="bg-info">
                                        <label for="headerSkin3">Info</label>
                                    </div>
                                    <div class="checkbox-custom fill checkbox-warning mb5">
                                        <input type="radio" name="headerSkin" id="headerSkin4" value="bg-warning">
                                        <label for="headerSkin4">Warning</label>
                                    </div>
                                    <div class="checkbox-custom fill checkbox-danger mb5">
                                        <input type="radio" name="headerSkin" id="headerSkin5" value="bg-danger">
                                        <label for="headerSkin5">Danger</label>
                                    </div>
                                    <div class="checkbox-custom fill checkbox-alert mb5">
                                        <input type="radio" name="headerSkin" id="headerSkin6" value="bg-alert">
                                        <label for="headerSkin6">Alert</label>
                                    </div>
                                    <div class="checkbox-custom fill checkbox-system mb5">
                                        <input type="radio" name="headerSkin" id="headerSkin7" value="bg-system">
                                        <label for="headerSkin7">System</label>
                                    </div>
                                    <div class="checkbox-custom fill checkbox-success mb5">
                                        <input type="radio" name="headerSkin" id="headerSkin2" value="bg-success">
                                        <label for="headerSkin2">Success</label>
                                    </div>
                                    <div class="checkbox-custom fill mb5">
                                        <input type="radio" name="headerSkin" id="headerSkin9" value="bg-dark">
                                        <label for="headerSkin9">Dark</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="toolbox-sidebar">
                            <form id="toolbox-sidebar-skin">
                                <h4 class="mv20">Sidebar Skins</h4>
                                <div class="skin-toolbox-swatches">
                                    <div class="checkbox-custom fill mb5">
                                        <input type="radio" name="sidebarSkin" checked id="sidebarSkin3" value="">
                                        <label for="sidebarSkin3">Dark</label>
                                    </div>
                                    <div class="checkbox-custom fill checkbox-disabled mb5">
                                        <input type="radio" name="sidebarSkin" id="sidebarSkin1" value="sidebar-light">
                                        <label for="sidebarSkin1">Light</label>
                                    </div>
                                    <div class="checkbox-custom fill checkbox-light mb5">
                                        <input type="radio" name="sidebarSkin" id="sidebarSkin2" value="sidebar-light light">
                                        <label for="sidebarSkin2">Lighter</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="toolbox-settings">
                            <form id="toolbox-settings-misc">
                                <h4 class="mv20 mtn">Layout Options</h4>
                                <div class="form-group">
                                    <div class="checkbox-custom fill mb5">
                                        <input type="checkbox" checked="" id="header-option">
                                        <label for="header-option">Fixed Header</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox-custom fill mb5">
                                        <input type="checkbox" checked="" id="sidebar-option">
                                        <label for="sidebar-option">Fixed Sidebar</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox-custom fill mb5">
                                        <input type="checkbox" id="breadcrumb-option">
                                        <label for="breadcrumb-option">Fixed Breadcrumbs</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox-custom fill mb5">
                                        <input type="checkbox" id="breadcrumb-hidden">
                                        <label for="breadcrumb-hidden">Hide Breadcrumbs</label>
                                    </div>
                                </div>
                                <h4 class="mv20">Layout Options</h4>
                                <div class="form-group">
                                    <div class="radio-custom mb5">
                                        <input type="radio" id="fullwidth-option" checked name="layout-option">
                                        <label for="fullwidth-option">Fullwidth Layout</label>
                                    </div>
                                </div>
                                <div class="form-group mb20">
                                    <div class="radio-custom radio-disabled mb5">
                                        <input type="radio" id="boxed-option" name="layout-option" disabled>
                                        <label for="boxed-option">Boxed Layout
                                            <b class="text-muted">(Coming Soon)</b>
                                        </label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="form-group mn br-t p15">
                        <a href="#" id="clearLocalStorage" class="btn btn-primary btn-block pb10 pt10">Clear LocalStorage</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="main">

            <!-- Start: Header -->
            <header class="navbar navbar-fixed-top navbar-shadow">
                <div class="navbar-branding">
                    <a class="navbar-brand" href="dashboard.html">
                        <b>Mylene</b>Manikas
                    </a>
                    <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
                </div>
                <ul class="nav navbar-nav navbar-left">
                    <li class="dropdown menu-merge hidden-xs">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">actions rapides
                            <span class="caret caret-tp"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"></a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                    <li class="hidden-xs">
                        <a class="request-fullscreen toggle-active" href="#">
                            <span class="ad ad-screen-full fs18"></span>
                        </a>
                    </li>
                </ul>
                <form class="navbar-form navbar-left navbar-search alt" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search..." value="Search...">
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <div class="navbar-btn btn-group">
                            <a href="#" class="topbar-menu-toggle btn btn-sm" data-toggle="button">
                                <span class="ad ad-wand"></span>
                            </a>
                        </div>
                    </li>
                    <li class="dropdown menu-merge">
                        <div class="navbar-btn btn-group">
                            <button data-toggle="dropdown" class="btn btn-sm dropdown-toggle">
                                <span class="fa fa-shopping-cart fs14 va-m"></span>
                                <span class="badge badge-danger">{{count(session('id_movies'))}}</span>
                            </button>
                            <div class="dropdown-menu dropdown-persist w350 animated animated-shorter fadeIn" role="menu">
                                <div class="panel mbn">
                                    <div class="panel-menu">
                                        <span class="panel-icon"><i class="fa fa-clock-o"></i></span>
                                        <span class="panel-title fw600"> Vous avez {{count(session('id_movies'))}} acteurs dans votre panier</span>
                                        <a class="btn btn-default light btn-xs pull-right" href="{{route('movies_actualise')}}"><i class="fa fa-trash" ></i>
                                        </a>
                                    </div>
                                    <div class="panel-body panel-scroller scroller-navbar scroller-overlay scroller-pn pn">



                                        <ol class="timeline-list">

                                            @foreach(session("id_movies",[]) as $key => $movie)
                                            <li class="timeline-item">
                                                <div class="timeline-icon bg-dark light">
                                                    <span class="fa fa-tags"></span>
                                                </div>
                                                <div class="timeline-desc">
                                                    {{$movie}}
                                                </div>
                                                <a class="btn btn-default light btn-xs pull-right" href="{{route('movies_actualiserelement',["id" => $key])}}"><i class="fa fa-trash" ></i>
                                                </a>
                                                <div class="timeline-date">1:25am</div>

                                            </li>
                                            @endforeach


                                        </ol>
                                    </div>
                                    <li class="dropdown menu-merge">
                                        <div class="navbar-btn btn-group">
                                            <button data-toggle="dropdown" class="btn btn-sm dropdown-toggle">
                                                <span class="fa fa-group fs14 va-m"></span>
                                                <span class="badge badge-danger">{{count(session('id_actors'))}}</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-persist w350 animated animated-shorter fadeIn" role="menu">
                                                <div class="panel mbn">
                                                    <div class="panel-menu">
                                                        <span class="panel-icon"><i class="fa fa-clock-o"></i></span>
                                                        <span class="panel-title fw600"> 'Vous avez {{count(session('id_actors'))}} acteurs en favoris</span>

                                                            <a class="btn btn-default light btn-xs pull-right" href="{{route('actors_actualise')}}"><i class="fa fa-trash" ></i>
                                                            </a>

                                                    </div>
                                                    <div class="panel-body panel-scroller scroller-navbar scroller-overlay scroller-pn pn">


                                                    <ol class="timeline-list">

                                        @foreach(session("id_actors",[]) as $actor)
                                            <li class="timeline-item">
                                                <div class="timeline-icon bg-dark light">
                                                    <span class="fa fa-tags"></span>
                                                </div>
                                                <div class="timeline-desc">
                                                    {{$actor['nom'] }}


                                                </div>
                                                <div class="timeline-date">{{$actor['city'] }}</div>

                                            </li>
                                        @endforeach


                                    </ol>
                                </div>


                                    <div class="panel-footer text-center p7">
                                        <a href="#" class="link-unstyled"> View All </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown menu-merge">
                        <div class="navbar-btn btn-group">
                            <button data-toggle="dropdown" class="btn btn-sm dropdown-toggle">
                                <span class="ad ad-radio-tower fs14 va-m"></span>
                                <span class="badge">5</span>
                            </button>
                            <div class="dropdown-menu dropdown-persist w350 animated animated-shorter fadeIn" role="menu">
                                <div class="panel mbn">
                                    <div class="panel-menu">
                                        <div class="btn-group btn-group-justified btn-group-nav" role="tablist">
                                            <a href="#nav-tab1" data-toggle="tab" class="btn btn-default btn-sm active">Notifications</a>
                                            <a href="#nav-tab2" data-toggle="tab" class="btn btn-default btn-sm br-l-n br-r-n">Messages</a>
                                            <a href="#nav-tab3" data-toggle="tab" class="btn btn-default btn-sm">Activity</a>
                                        </div>
                                    </div>
                                    <div class="panel-body panel-scroller scroller-navbar pn">
                                        <div class="tab-content br-n pn">
                                            <div id="nav-tab1" class="tab-pane alerts-widget active" role="tabpanel">
                                                <div class="media">
                                                    <a class="media-left" href="#"> <span class="glyphicon glyphicon-user text-info"></span> </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">New Registration
                                                            <small class="text-muted"></small>
                                                        </h5> Tyler Durden - 16 hours ago

                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response"> Approve?</div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-default btn-xs light">
                                                                <i class="fa fa-check text-success"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-default btn-xs light">
                                                                <i class="fa fa-remove"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a class="media-left" href="#"> <span class="glyphicon glyphicon-shopping-cart text-success"></span> </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">New Order
                                                            <small class="text-muted"></small>
                                                        </h5> <a href="#">Apple Ipod</a> - 4 hours ago
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response"> Confirm?</div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-default btn-xs light">
                                                                <i class="fa fa-check text-success"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-default btn-xs light">
                                                                <i class="fa fa-print"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a class="media-left" href="#"> <span class="glyphicon glyphicon-comment text-system"></span> </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">New Comment
                                                            <small class="text-muted"></small>
                                                        </h5> Mike - I loved your article!
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response text-right"> Moderate?</div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-default btn-xs light">
                                                                <i class="fa fa-pencil"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-default btn-xs light">
                                                                <i class="fa fa-check text-success"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a class="media-left" href="#"> <span class="glyphicon glyphicon-star text-warning"></span> </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">New Review
                                                            <small class="text-muted"></small>
                                                        </h5> Sammy Hilton - 4 hours ago
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response"> Approve?</div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-default btn-xs light">
                                                                <i class="fa fa-check text-success"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-default btn-xs light">
                                                                <i class="fa fa-remove"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a class="media-left" href="#"> <span class="glyphicon glyphicon-user text-info"></span> </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">New Registration
                                                            <small class="text-muted"></small>
                                                        </h5> Mylene Sober - 7 hours ago
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response"> Approve?</div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-default btn-xs light">
                                                                <i class="fa fa-check text-success"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-default btn-xs light">
                                                                <i class="fa fa-remove"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a class="media-left" href="#"> <span class="glyphicon glyphicon-usd text-alert"></span> </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">New Invoice
                                                            <small class="text-muted"></small>
                                                        </h5> <a href="#">Apple Ipod</a> - 4 hours ago

                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response single">#518358</div>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <a class="media-left" href="#"> <span class="glyphicon glyphicon-shopping-cart text-success"></span> </a>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">New Order
                                                            <small class="text-muted"></small>
                                                        </h5> <a href="#">Apple Ipod</a> - 4 hours ago
                                                    </div>
                                                    <div class="media-right">
                                                        <div class="media-response"> Confirm?</div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-default btn-xs light">
                                                                <i class="fa fa-check text-success"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-default btn-xs light">
                                                                <i class="fa fa-print"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="nav-tab2" class="tab-pane chat-widget" role="tabpanel">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" alt="64x64" src="{{asset("img/donald.png")}}">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="media-status online"></span>
                                                        <h5 class="media-heading">Courtney Faught
                                                            <small> - 12:30am</small>
                                                        </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="media-body">
                                                        <span class="media-status offline"></span>
                                                        <h5 class="media-heading">Joe Gibbons
                                                            <small> - 12:30am</small>
                                                        </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.
                                                    </div>
                                                    <div class="media-right">
                                                        <a href="#">
                                                            <img class="media-object" alt="64x64" src="{{asset("img/donald.png")}}">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" alt="64x64" src="{{asset("img/donald.png")}}">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="media-status online"></span>
                                                        <h5 class="media-heading">Courtney Faught
                                                            <small> - 12:30am</small>
                                                        </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metuscommodo.
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="media-body">
                                                        <span class="media-status offline"></span>
                                                        <h5 class="media-heading">Joe Gibbons
                                                            <small> - 12:30am</small>
                                                        </h5> Cras sit amet nibh libero, in Nulla vel metus scelerisque antecommodo.
                                                    </div>
                                                    <div class="media-right">
                                                        <a href="#">
                                                            <img class="media-object" alt="64x64" src="{{asset("img/donald.png")}}">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" alt="64x64" src="{{asset("img/donald.png")}}">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <span class="media-status online"></span>
                                                        <h5 class="media-heading">Courtney Faught
                                                            <small> - 12:30am</small>
                                                        </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque soltudino.
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="media-body">
                                                        <span class="media-status offline"></span>
                                                        <h5 class="media-heading">Joe Gibbons
                                                            <small> - 12:30am</small>
                                                        </h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                                                    </div>
                                                    <div class="media-right">
                                                        <a href="#">
                                                            <img class="media-object" alt="64x64"src="{{asset("img/donald.png")}}">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="nav-tab3" class="tab-pane scroller-nm" role="tabpanel">
                                                <ul class="media-list" role="menu">
                                                    <li class="media">
                                                        <a class="media-left" href="#"> <img src="{{asset("img/donald.png")}}" class="mw40" alt="avatar"> </a>
                                                        <div class="media-body">
                                                            <h5 class="media-heading">Article
                                                                <small class="text-muted">- 08/16/22</small>
                                                            </h5> Last Updated 36 days ago by
                                                            <a class="text-system" href="#"> Max </a>
                                                        </div>
                                                    </li>
                                                    <li class="media">
                                                        <a class="media-left" href="#"> <img src="{{asset("img/donald.png")}}" class="mw40" alt="avatar"> </a>
                                                        <div class="media-body">
                                                            <h5 class="media-heading mv5">Article
                                                                <small> - 08/16/22</small>
                                                            </h5>
                                                            Last Updated 36 days ago by
                                                            <a class="text-system" href="#"> Max </a>
                                                        </div>
                                                    </li>
                                                    <li class="media">
                                                        <a class="media-left" href="#"> <img src="{{asset("img/donald.png")}}" class="mw40" alt="avatar"> </a>
                                                        <div class="media-body">
                                                            <h5 class="media-heading">Article
                                                                <small class="text-muted">- 08/16/22</small>
                                                            </h5> Last Updated 36 days ago by
                                                            <a class="text-system" href="#"> Max </a>
                                                        </div>
                                                    </li>
                                                    <li class="media">
                                                        <a class="media-left" href="#"> <img src="{{asset("img/donald.png")}}" class="mw40" alt="avatar"> </a>
                                                        <div class="media-body">
                                                            <h5 class="media-heading mv5">Article
                                                                <small class="text-muted">- 08/16/22</small>
                                                            </h5> Last Updated 36 days ago by
                                                            <a class="text-system" href="#"> Max </a>
                                                        </div>
                                                    </li>
                                                    <li class="media">
                                                        <a class="media-left" href="#"> <img src="{{asset("img/donald.png")}}" class="mw40" alt="avatar"> </a>
                                                        <div class="media-body">
                                                            <h5 class="media-heading">Article
                                                                <small class="text-muted">- 08/16/22</small>
                                                            </h5> Last Updated 36 days ago by
                                                            <a class="text-system" href="#"> Max </a>
                                                        </div>
                                                    </li>
                                                    <li class="media">
                                                        <a class="media-left" href="#"> <img src="{{asset("img/donald.png")}}" class="mw40" alt="avatar"> </a>
                                                        <div class="media-body">
                                                            <h5 class="media-heading mv5">Article
                                                                <small> - 08/16/22</small>
                                                            </h5>
                                                            Last Updated 36 days ago by
                                                            <a class="text-system" href="#"> Max </a>
                                                        </div>
                                                    </li>
                                                    <li class="media">
                                                        <a class="media-left" href="#"> <img src="{{asset("img/donald.png")}}" class="mw40" alt="avatar"> </a>
                                                        <div class="media-body">
                                                            <h5 class="media-heading">Article
                                                                <small class="text-muted">- 08/16/22</small>
                                                            </h5> Last Updated 36 days ago by
                                                            <a class="text-system" href="#"> Max </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <table class="table table-striped hidden">
                                                    <thead>
                                                    <tr>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Username</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Larry</td>
                                                        <td>the Bird</td>
                                                        <td>@twitter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sussy</td>
                                                        <td>Watcher</td>
                                                        <td>@thehawk</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sussy</td>
                                                        <td>Watcher</td>
                                                        <td>@thehawk</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Larry</td>
                                                        <td>the Bird</td>
                                                        <td>@twitter</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sussy</td>
                                                        <td>Watcher</td>
                                                        <td>@thehawk</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer text-center p7">
                                        <a href="#" class="link-unstyled"> View All </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown menu-merge">
                        <div class="navbar-btn btn-group">
                            <button data-toggle="dropdown" class="btn btn-sm dropdown-toggle">
                                <span class="flag-xs flag-us"></span>
                                <!-- <span class="caret"></span> -->
                            </button>
                            <ul class="dropdown-menu pv5 animated animated-short flipInX" role="menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <span class="flag-xs flag-in mr10"></span> Hindu </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <span class="flag-xs flag-tr mr10"></span> Turkish </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <span class="flag-xs flag-es mr10"></span> Spanish </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-divider hidden-xs">
                        <i class="fa fa-circle"></i>
                    </li>
                    <li class="dropdown menu-merge">
                        <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown">
                            <img src="{{asset("img/donald.png")}}" alt="avatar" class="mw30 br64">
                            <span class="hidden-xs pl15"> Mylene M. </span>
                            <span class="caret caret-tp hidden-xs"></span>
                        </a>
                        <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
                            <li class="dropdown-header clearfix">
                                <div class="pull-left ml10">
                                    <select id="user-status">
                                        <optgroup label="Current Status:">
                                            <option value="1-1">Away</option>
                                            <option value="1-2">Offline</option>
                                            <option value="1-3" selected="selected">Online</option>
                                        </optgroup>
                                    </select>
                                </div>

                                <div class="pull-right mr10">
                                    <select id="user-role">
                                        <optgroup label="Logged in As:">
                                            <option value="1-1">Client</option>
                                            <option value="1-2">Editor</option>
                                            <option value="1-3" selected="selected">Admin</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="animated animated-short fadeInUp">
                                    <span class="fa fa-envelope"></span> Messages
                                    <span class="label label-warning">2</span>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="animated animated-short fadeInUp">
                                    <span class="fa fa-user"></span> Friends
                                    <span class="label label-warning">6</span>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="animated animated-short fadeInUp">
                                    <span class="fa fa-bell"></span> Notifications </a>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="animated animated-short fadeInUp">
                                    <span class="fa fa-gear"></span> Settings </a>
                            </li>
                            <li class="dropdown-footer">
                                <a href="#" class="">
                                    <span class="fa fa-power-off pr5"></span> Logout </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </header>
            <!-- End: Header -->

            <!-- Start: Sidebar -->
            <aside id="sidebar_left" class="nano nano-light affix">

                <!-- Start: Sidebar Left Content -->
                <div class="sidebar-left-content nano-content">

                    <!-- Start: Sidebar Header -->
                    <header class="sidebar-header">

                        <!-- Sidebar Widget - Author -->
                        <div class="sidebar-widget author-widget">
                            <div class="media">
                                <a class="media-left" href="#">
                                    <img src="{{asset("img/donald.png")}}" class="img-responsive">
                                </a>
                                <div class="media-body">
                                    <div class="media-links">
                                        <a href="#" class="sidebar-menu-toggle">User Menu -</a> <a href="pages_login(alt).html">Logout</a>
                                    </div>
                                    <div class="media-author">Mylene Manikas</div>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar Widget - Menu (slidedown) -->
                        <div class="sidebar-widget menu-widget">
                            <div class="row text-center mbn">
                                <div class="col-xs-4">
                                    <a href="dashboard.html" class="text-primary" data-toggle="tooltip" data-placement="top" title="Dashboard">
                                        <span class="glyphicon glyphicon-home"></span>
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="pages_messages.html" class="text-info" data-toggle="tooltip" data-placement="top" title="Messages">
                                        <span class="glyphicon glyphicon-inbox"></span>
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="pages_profile.html" class="text-alert" data-toggle="tooltip" data-placement="top" title="Tasks">
                                        <span class="glyphicon glyphicon-bell"></span>
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="pages_timeline.html" class="text-system" data-toggle="tooltip" data-placement="top" title="Activity">
                                        <span class="fa fa-desktop"></span>
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="pages_profile.html" class="text-danger" data-toggle="tooltip" data-placement="top" title="Settings">
                                        <span class="fa fa-gears"></span>
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="pages_gallery.html" class="text-warning" data-toggle="tooltip" data-placement="top" title="Cron Jobs">
                                        <span class="fa fa-flask"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Sidebar Widget - Search (hidden) -->
                        <div class="sidebar-widget search-widget hidden">
                            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-search"></i>
              </span>
                                <input type="text" id="sidebar-search" class="form-control" placeholder="Search...">
                            </div>
                        </div>

                    </header>
                    <!-- End: Sidebar Header -->

                    <!-- Start: Sidebar Menu -->
                    <ul class="nav sidebar-menu">
                        <li class="sidebar-label pt20">Menu</li>
                        <li>
                            <a href="{{ route('static_welcome')}}">
                                <span class="fa fa-calendar"></span>
                                <span class="sidebar-title">Dashboard</span>
              <span class="sidebar-title-tray">
                <span class="label label-xs bg-primary"></span>
              </span>
                            </a>
                        </li>
                        <li>

                            <a href="{{ route('movies_lister')}}">
                                <span class="glyphicon glyphicon-book"></span>
                                <span class="sidebar-title">Gestion des films</span>

                            </a>
                        </li>
                        <li class="active">
                            <a href="{{ route('categories_lister')}}">
                                <span class="glyphicon glyphicon-home"></span>
                                <span class="sidebar-title">Gestion des catégories</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="{{ route('actors_lister')}}">
                                <span class="glyphicon glyphicon-home"></span>
                                <span class="sidebar-title">Gestion des acteurs</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="{{ route('directors_lister')}}">
                                <span class="glyphicon glyphicon-home"></span>
                                <span class="sidebar-title">Gestion des réalisateurs</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="{{ route('directors_lister')}}">
                                <span class="glyphicon glyphicon-home"></span>
                                <span class="sidebar-title">Gestion des commentaires</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="{{ route('user_lister')}}">
                                <span class="glyphicon glyphicon-home"></span>
                                <span class="sidebar-title">Gestion des utilisateurs</span>
                            </a>
                        </li>
                    <!-- End: Sidebar Menu -->

                    <!-- Start: Sidebar Collapse Button -->
                    <div class="sidebar-toggle-mini">
                        <a href="#">
                            <span class="fa fa-sign-out"></span>
                        </a>
                    </div>
                    <!-- End: Sidebar Collapse Button -->

                </div>
                <!-- End: Sidebar Left Content -->

            </aside>
            <!-- End: Sidebar Left -->

            <!-- Start: Content-Wrapper -->
            <section id="content_wrapper">
                @section('content')


                 @show

            </section>
        </div>

        <!-- BEGIN: PAGE SCRIPTS -->

        <!-- jQuery -->
        <script src="{{asset("vendor/jquery/jquery-1.11.1.min.js")}}"></script>
        <script src="{{asset("vendor/jquery/jquery_ui/jquery-ui.min.js")}}"></script>

        <!-- HighCharts Plugin -->
        <script src="{{asset("vendor/plugins/highcharts/highcharts.js")}}"></script>

        <!-- JvectorMap Plugin + US Map (more maps in plugin/assets folder) -->
        <script src="{{asset("vendor/plugins/jvectormap/jquery.jvectormap.min.js")}}"></script>
        <script src="{{asset("vendor/plugins/jvectormap/assets/jquery-jvectormap-us-lcc-en.js")}}"></script>

        <!-- FullCalendar Plugin + moment Dependency -->
        <script src="{{asset("vendor/plugins/fullcalendar/lib/moment.min.js")}}"></script>
        <script src="{{asset("vendor/plugins/fullcalendar/fullcalendar.min.js")}}"></script>

        <!-- Theme Javascript -->
        <script src="{{asset("assets/js/utility/utility.js")}}"></script>
        <script src="{{asset("assets/js/demo/demo.js")}}"></script>
        <script src={{asset("assets/js/main.js")}}></script>

        <!-- Widget Javascript -->
        <script src="{{asset("assets/js/demo/widgets.js")}}"></script>
        <script type="text/javascript">
            jQuery(document).ready(function() {

                "use strict";

                // Init Demo JS
                Demo.init();


                // Init Theme Core
                Core.init();


                // Init Widget Demo JS
                // demoHighCharts.init();

                // Because we are using Admin Panels we use the OnFinish
                // callback to activate the demoWidgets. It's smoother if
                // we let the panels be moved and organized before
                // filling them with content from various plugins

                // Init plugins used on this page
                // HighCharts, JvectorMap, Admin Panels

                // Init Admin Panels on widgets inside the ".admin-panels" container
                $('.admin-panels').adminpanel({
                    grid: '.admin-grid',
                    draggable: true,
                    preserveGrid: true,
                    // mobile: true,
                    onStart: function() {
                        // Do something before AdminPanels runs
                    },
                    onFinish: function() {
                        $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');

                        // Init the rest of the plugins now that the panels
                        // have had a chance to be moved and organized.
                        // It's less taxing to organize empty panels
                        demoHighCharts.init();
                        runVectorMaps(); // function below
                    },
                    onSave: function() {
                        $(window).trigger('resize');
                    }
                });


                // Init plugins for ".calendar-widget"
                // plugins: FullCalendar
                //
                $('#calendar-widget').fullCalendar({
                    // contentHeight: 397,
                    editable: true,
                    events: [{
                        title: 'Sony Meeting',
                        start: '2015-05-1',
                        end: '2015-05-3',
                        className: 'fc-event-success',
                    }, {
                        title: 'Conference',
                        start: '2015-05-11',
                        end: '2015-05-13',
                        className: 'fc-event-warning'
                    }, {
                        title: 'Lunch Testing',
                        start: '2015-05-21',
                        end: '2015-05-23',
                        className: 'fc-event-primary'
                    },
                    ],
                    eventRender: function(event, element) {
                        // create event tooltip using bootstrap tooltips
                        $(element).attr("data-original-title", event.title);
                        $(element).tooltip({
                            container: 'body',
                            delay: {
                                "show": 100,
                                "hide": 200
                            }
                        });
                        // create a tooltip auto close timer
                        $(element).on('show.bs.tooltip', function() {
                            var autoClose = setTimeout(function() {
                                $('.tooltip').fadeOut();
                            }, 3500);
                        });
                    }
                });


                // Init plugins for ".task-widget"
                // plugins: Custom Functions + jQuery Sortable
                //
                var taskWidget = $('div.task-widget');
                var taskItems = taskWidget.find('li.task-item');
                var currentItems = taskWidget.find('ul.task-current');
                var completedItems = taskWidget.find('ul.task-completed');

                // Init jQuery Sortable on Task Widget
                taskWidget.sortable({
                    items: taskItems, // only init sortable on list items (not labels)
                    handle: '.task-menu',
                    axis: 'y',
                    connectWith: ".task-list",
                    update: function( event, ui ) {
                        var Item = ui.item;
                        var ParentList = Item.parent();

                        // If item is already checked move it to "current items list"
                        if (ParentList.hasClass('task-current')) {
                            Item.removeClass('item-checked').find('input[type="checkbox"]').prop('checked', false);
                        }
                        if (ParentList.hasClass('task-completed')) {
                            Item.addClass('item-checked').find('input[type="checkbox"]').prop('checked', true);
                        }

                    }
                });

                // Custom Functions to handle/assign list filter behavior
                taskItems.on('click', function(e) {
                    e.preventDefault();
                    var This = $(this);
                    var Target = $(e.target);

                    if (Target.is('.task-menu') && Target.parents('.task-completed').length) {
                        This.remove();
                        return;
                    }

                    if (Target.parents('.task-handle').length) {
                        // If item is already checked move it to "current items list"
                        if (This.hasClass('item-checked')) {
                            This.removeClass('item-checked').find('input[type="checkbox"]').prop('checked', false);
                        }
                        // Otherwise move it to the "completed items list"
                        else {
                            This.addClass('item-checked').find('input[type="checkbox"]').prop('checked', true);
                        }
                    }

                });


                var highColors = [bgSystem, bgSuccess, bgWarning, bgPrimary];

                // Chart data
                var seriesData = [{
                    name: 'Phones',
                    data: [5.0, 9, 17, 22, 19, 11.5, 5.2, 9.5, 11.3, 15.3, 19.9, 24.6]
                }, {
                    name: 'Notebooks',
                    data: [2.9, 3.2, 4.7, 5.5, 8.9, 12.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
                }, {
                    name: 'Desktops',
                    data: [15, 19, 22.7, 29.3, 22.0, 17.0, 23.8, 19.1, 22.1, 14.1, 11.6, 7.5]
                }, {
                    name: 'Music Players',
                    data: [11, 6, 5, 15, 17.0, 22.0, 30.8, 24.1, 14.1, 11.1, 9.6, 6.5]
                }];

                var ecomChart = $('#ecommerce_chart1');
                if (ecomChart.length) {
                    ecomChart.highcharts({
                        credits: false,
                        colors: highColors,
                        chart: {
                            backgroundColor: 'transparent',
                            className: '',
                            type: 'line',
                            zoomType: 'x',
                            panning: true,
                            panKey: 'shift',
                            marginTop: 45,
                            marginRight: 1,
                        },
                        title: {
                            text: null
                        },
                        xAxis: {
                            gridLineColor: '#EEE',
                            lineColor: '#EEE',
                            tickColor: '#EEE',
                            categories: ['Jan', 'Feb', 'Mar', 'Apr',
                                'May', 'Jun', 'Jul', 'Aug',
                                'Sep', 'Oct', 'Nov', 'Dec'
                            ]
                        },
                        yAxis: {
                            min: 0,
                            tickInterval: 5,
                            gridLineColor: '#EEE',
                            title: {
                                text: null,
                            }
                        },
                        plotOptions: {
                            spline: {
                                lineWidth: 3,
                            },
                            area: {
                                fillOpacity: 0.2
                            }
                        },
                        legend: {
                            enabled: true,
                            floating: false,
                            align: 'right',
                            verticalAlign: 'top',
                            x: -15
                        },
                        series: seriesData
                    });
                }

                // Widget VectorMap
                function runVectorMaps() {

                    // Jvector Map Plugin
                    var runJvectorMap = function() {
                        // Data set
                        var mapData = [900, 700, 350, 500];
                        // Init Jvector Map
                        $('#WidgetMap').vectorMap({
                            map: 'us_lcc_en',
                            //regionsSelectable: true,
                            backgroundColor: 'transparent',
                            series: {
                                markers: [{
                                    attribute: 'r',
                                    scale: [3, 7],
                                    values: mapData
                                }]
                            },
                            regionStyle: {
                                initial: {
                                    fill: '#E8E8E8'
                                },
                                hover: {
                                    "fill-opacity": 0.3
                                }
                            },
                            markers: [{
                                latLng: [37.78, -122.41],
                                name: 'San Francisco,CA'
                            }, {
                                latLng: [36.73, -103.98],
                                name: 'Texas,TX'
                            }, {
                                latLng: [38.62, -90.19],
                                name: 'St. Louis,MO'
                            }, {
                                latLng: [40.67, -73.94],
                                name: 'New York City,NY'
                            }],
                            markerStyle: {
                                initial: {
                                    fill: '#a288d5',
                                    stroke: '#b49ae0',
                                    "fill-opacity": 1,
                                    "stroke-width": 10,
                                    "stroke-opacity": 0.3,
                                    r: 3
                                },
                                hover: {
                                    stroke: 'black',
                                    "stroke-width": 2
                                },
                                selected: {
                                    fill: 'blue'
                                },
                                selectedHover: {}
                            },
                        });
                        // Manual code to alter the Vector map plugin to
                        // allow for individual coloring of countries
                        var states = ['US-CA', 'US-TX', 'US-MO',
                            'US-NY'
                        ];
                        var colors = [bgInfo, bgPrimaryLr, bgSuccessLr, bgWarningLr];
                        var colors2 = [bgInfo, bgPrimary, bgSuccess, bgWarning];
                        $.each(states, function(i, e) {
                            $("#WidgetMap path[data-code=" + e + "]").css({
                                fill: colors[i]
                            });
                        });
                        $('#WidgetMap').find('.jvectormap-marker')
                                .each(function(i, e) {
                                    $(e).css({
                                        fill: colors2[i],
                                        stroke: colors2[i]
                                    });
                                });
                    }

                    if ($('#WidgetMap').length) {
                        runJvectorMap();
                    }
                }

            });
        </script>
        <!-- END: PAGE SCRIPTS -->



        </body>


</html>