@extends('layout')
@section('content')
    <h3><i class="fa fa-dashboard"></i></i>Dashboard</h3></h3>
    <hr/>

<div class="col-md-3">
    <div class="panel panel-tile text-center">
        <div class="panel-body bg-success light">
            <i class="fa fa-film text-muted fs70 mt10"></i>
            <h1 class="fs35 mbn">{{$nb}} / {{ $nbtotal }}</h1>
            <h6 class="text-white">Films actifs</h6>
        </div>
    </div>
</div>

    <div class="col-md-3">
        <div class="panel panel-tile text-center">
            <div class="panel-body bg-primary light">
                <i class="fa fa-comments text-muted fs70 mt10"></i>
                <h1 class="fs35 mbn">{{ $nbtotalc }}</h1>
                <h6 class="text-white">CATEGORIES</h6>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="panel panel-tile text-center">
            <div class="panel-body bg-success light">
                <i class="fa fa-eye text-muted fs70 mt10"></i>
                <h1 class="fs35 mbn">{{$nbtotala}}</h1>
                <h6 class="text-white">ACTORS</h6>
            </div>

        </div>


    </div>

    <div class="col-md-3">
        <div class="panel panel-tile text-center">
            <div class="panel-body bg-primary light">
                <i class="fa fa-group text-muted fs70 mt10"></i>
                <h1 class="fs35 mbn">{{$nbtotald}}</h1>
                <h6 class="text-white">DIRECTORS</h6>
            </div>
        </div>
    </div>

    <div class="col-md-3">
    <div class="panel panel-tile text-center">
        <div class="panel-body bg-primary light">
            <i class="fa fa-twitter text-muted fs45 br64 bg-primary p15 ph20 mt10"></i>
            <h1 class="fs35 mbn">{{$budget}}</h1>
            <h6 class="text-white">SOMME DES BUDGETS DES FILMS</h6>
        </div>
    </div>
    </div>


    <div class="col-md-3">
    <div class="panel panel-tile text-center">
        <div class="panel-body bg-success light">
            <i class="fa fa-twitter text-muted fs45 br64 bg-success p15 ph20 mt10"></i>
            <h1 class="fs35 mbn">{{$moyenneage}}</h1>
            <h6 class="text-white">NB CONVERSIONS</h6>
        </div>
    </div>
    </div>






















@endsection