@extends('layout')

@section('content')
    <header id="topbar" class="alt">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-active">
                    <a href="dashboard.html">Recherche</a>
                </li>
                <li class="crumb-icon">
                    <a href="dashboard.html">
                        <span class="glyphicon glyphicon-home"></span>
                    </a>
                </li>
                <li class="crumb-link">
                    <a href="index.html">Home</a>
                </li>
                <li class="crumb-trail">Recherche</li>
            </ol>
        </div>
    </header>
    <!-- begin: .tray-center -->
    <div class="tray tray-center">

        <!-- Search Results Panel  -->
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title text-muted hidden-xs">Returned 13,628 results (0.15 seconds)</span>
                <ul class="nav panel-tabs-border panel-tabs-merge panel-tabs">
                    <li class="active"><a href="#search" data-toggle="tab">Classic Search</a></li>
                    <li><a href="#users" data-toggle="tab">User Search</a></li>
                </ul>
            </div>
            <div class="panel-menu">
                <div class="input-group input-hero input-hero-sm">
	                <span class="input-group-addon">
	                  <i class="fa fa-search"></i>
	                </span>
                    <input type="text" id="icon-filter" class="form-control" placeholder="Enter search terms..">
                </div>
            </div>
            <div class="panel-body ph20">
                <div class="tab-content">

                    <!-- Classic Search Pane -->
    <div id="search" class="tab-pane active">

        <!-- Search Pane Title -->
        <h3>Il existe <b class="text-primary">{{count($result)}}</b> résultat pour votre recherche</h3>
        <hr class="alt">

        <!-- Begin Search Result Entries -->
        @foreach($result as $movie)
            <div class="search-result">
                <h3><a href="http://themeforest.net/user/AdminDesigns">
                        {{$movie->mtitle}}</a>
                    {{$movie->mtitle}}</h3>
                <ul class="result-meta">
                    <li>{{$movie->budget}}</li>
                    <li>{{$movie->duree}}</li>
                    <li>
                        {!! str_repeat('<i class="fa fa-star-o text-warning"></i>',$movie->note_presse) !!}
                    </li>
                </ul>
                <p>{{strip_tags($movie->msynopsis)}}</p>
            </div>
        @endforeach
    </div>

    <div class="panel-footer clearfix">
        <nav>
            <ul class="pagination pull-right">
                <li class="prev disabled"><a href="#"><i class="fa fa-angle-left"></i> Previous</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li class="next"><a href="#">Next <i class="fa fa-angle-right"></i></a></li>
            </ul>
        </nav>
    </div>
    </div>
                <hr class="alt">

    </div>
    <!-- end: .tray-center -->
@endsection
