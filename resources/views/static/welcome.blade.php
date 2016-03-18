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
            <h6 class="text-white">MOYENNE D'AGE DES ACTEURS</h6>
        </div>
    </div>
    </div>


    <div class="col-md-3">
    <div class="panel panel-tile text-center">
        <div class="panel-body bg-primary light">
            <i class="fa fa-twitter text-muted fs45 br64 bg-primary p15 ph20 mt10"></i>
            <h1 class="fs35 mbn">{{ $nextseance }}</h1>
            <h6 class="text-white">SEANCE A VENIR</h6>
        </div>
    </div>
    </div>


    <div class="col-md-3">
    <div class="panel panel-tile text-center">
        <div class="panel-body bg-success light">
            <i class="fa fa-twitter text-muted fs45 br64 bg-success p15 ph20 mt10"></i>
            <h1 class="fs35 mbn">{{$nbU}} / {{ $nbtotalU }}</h1>
            <h6 class="text-white">Utilisateurs actifs</h6>
        </div>
    </div>
    </div>






    <div class="col-xs-12 col-sm-6 col-md-6">

    <!-- User Group Widget -->
    <div class="panel user-group-widget">
        <div class="panel-heading">
                    <span class="panel-icon">
                      <i class="fa fa-users"></i>
                    </span>
            <span class="panel-title"> 16 derniers utilisateurs</span>
        </div>
        <div class="panel-menu">
            <div class="input-group ">
                      <span class="input-group-addon">
                        <i class="fa fa-search"></i>
                      </span>
                <input type="text" class="form-control" placeholder="Search user...">
            </div>
        </div>

        <div class="panel-body panel-scroller pn" style="max-height: 513px;">

            <div class="row centrer">
                @foreach($lastuser as $luser)
                <div class="col-md-3 user">

                        <img style="width:100%;" src="{{$luser->avatar}}" class="user-avatar users"/>
                    <div class="caption">

                        <h5>{!!$luser->username!!}
                            <br>
                            <small>{!!$luser->ville!!}</small>
                        </h5>

                    </div>

                </div>
                @endforeach
            </div>
        </div>
        </div>
        </div>




    <!--10 prochaines sessions-->

    <div class="col-xs-12 col-sm-6 col-md-6">
    <div class="panel">
        <div class="panel-heading">
    <span class="panel-icon">
      <i class="fa fa-clock-o"></i>
    </span>
            <span class="panel-title"> 10 prochaines sessions</span>
        </div>
        <div class="panel-body ptn pbn p10">
            <ol class="timeline-list">
                @foreach($prochainesession as $session)

                <li class="timeline-item">
                    <div class="timeline-icon bg-dark light">
                        <span class="fa fa-tags"></span>
                    </div>

                    <div class="timeline-desc">

                        <b>{!!$session->ctitle!!}</b> diffusé a
                        <a href="#">{!!$session->cville !!}</a>
                    </div>
                    <div class="timeline-date">{!!$session->date_session!!}</div>
                </li>
                @endforeach
            </ol>
        </div>
    </div>
    </div>





    <div class="col-xs-12 col-sm-6 col-md-6">
    <div class="panel listgroup-widget">
        <div class="panel-heading">
    <span class="panel-icon">
      <i class="fa fa-tag"></i>
    </span>
            <span class="panel-title">Nombre</span>
        </div>
        <ul class="list-group">
            <li class="list-group-item">
                <span class="badge badge-primary">{{ $nbtotal }}</span>
                Films
            </li>
            <li class="list-group-item">
                <span class="badge badge-success">{{ $nbtotalc }}</span>
                Categorie
            </li>
            <li class="list-group-item">
                <span class="badge badge-info">{{ $nbtotala }}</span>
                Actors
            </li>
            <li class="list-group-item">
                <span class="badge badge-warning">{{$nbtotald}}</span>
                Directors
            </li>
            <li class="list-group-item">
                <span class="badge badge-danger">22</span>
                Users
            </li>
        </ul>
    </div>
    </div>

































@endsection