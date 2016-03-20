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
            <h6 class="text-white">SEANCES A VENIR</h6>
        </div>
    </div>
    </div>


    <div class="col-md-3">
    <div class="panel panel-tile text-center">
        <div class="panel-body bg-success light">
            <i class="fa fa-twitter text-muted fs45 br64 bg-success p15 ph20 mt10"></i>
            <h1 class="fs35 mbn">{{$nbU}} / {{ $nbtotalU }}</h1>
            <h6 class="text-white">UTILISATEURS ACTIFS</h6>
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
            <span class="panel-title"> 12 derniers utilisateurs</span>
        </div>
        <!--<div class="panel-menu">
            <div class="input-group ">
                      <span class="input-group-addon">
                        <i class="fa fa-search"></i>
                      </span>
                <input type="text" class="form-control" placeholder="Search user...">
            </div>
        </div>
-->
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
            <span class="panel-title"> 4 prochaines sessions</span>
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




    <div class="row">
        <!-- Three Pane Widget -->
        <div class="col-md-12  ">

            <!-- dashboard activity -->
            <div class="panel sort-disable" id="p01" data-panel-title="false">
                <div class="panel-heading">
                    <span class="panel-title hidden-xs hidden"> Recent Activity</span>
                    <ul class="nav panel-tabs panel-tabs-left">
                        <!-- Demo Note: all hrefs set to #tab1_1 -->
                        <li class="active">
                            <a href="#tab1_1" data-toggle="tab"> User Activity</a>
                        </li>
                    </ul>
                </div>
                <div class="panel-body pn">

                    <div class="tab-content">
                        <div class="tab-pane active p15" id="tab1_1" role="tabpanel" >
                            <div class="row">

                                <!-- Chart Column -->
                                <div class="col-md-8 pln br-r mvn15">
                                    <h5 class="ml5 mt20 ph10 pb5 br-b fw600 hidden">Visitors
                                        <small class="pull-right fw600">13,253
                                            <span class="text-primary">(8,251 unique)</span>
                                        </small>
                                    </h5>
                                    <div id="ecommerce_chart1" style="height: 300px;"></div>
                                </div>

                                <!-- Multi Text Column -->
                                <div class="col-md-4">
                                    <h5 class="mt5 mbn ph10 pb5 br-b fw600">Top Referrals
                                        <small class="pull-right fw600 text-primary">View Report </small>
                                    </h5>
                                    <table class="table mbn tc-med-1 tc-bold-last tc-fs13-last">
                                        <thead>
                                        <tr class="hidden">
                                            <th>Source</th>
                                            <th>Count</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <i class="fa fa-circle text-warning fs8 pr15"></i>
                                                <span>www.google.com</span>
                                            </td>
                                            <td>1,926</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-circle text-warning fs8 pr15"></i>
                                                <span>www.yahoo.com</span>
                                            </td>
                                            <td>1,254</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-circle text-warning fs8 pr15"></i>
                                                <span>www.themeforest.com</span>
                                            </td>
                                            <td>783</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <h5 class="mt15 mbn ph10 pb5 br-b fw600">Top Search Terms
                                        <small class="pull-right fw600 text-primary">View Report </small>
                                    </h5>
                                    <table class="table mbn tc-med-1 tc-bold-last tc-fs13-last">
                                        <thead>
                                        <tr class="hidden">
                                            <th>Source</th>
                                            <th>Count</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <i class="fa fa-circle text-warning fs8 pr15"></i>
                                                <span>admin theme</span>
                                            </td>
                                            <td>988</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-circle text-warning fs8 pr15"></i>
                                                <span>admin dashboard</span>
                                            </td>
                                            <td>612</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-circle text-warning fs8 pr15"></i>
                                                <span>admin template</span>
                                            </td>
                                            <td>256</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Flag/Icon Column -->
                                <div class="col-md-4 hidden">
                                    <h5 class="mt5 ph10 pb5 br-b fw600">Traffic Sources
                                        <small class="pull-right fw600 text-primary">View Stats </small>
                                    </h5>
                                    <table class="table mbn">
                                        <thead>
                                        <tr class="hidden">
                                            <th>#</th>
                                            <th>First Name</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="va-m fw600 text-muted">
                                                <span class="flag-xs flag-us mr5 va-b"></span> United States</td>
                                            <td class="fs15 fw600 text-right">28%</td>
                                        </tr>
                                        <tr>
                                            <td class="va-m fw600 text-muted">
                                                <span class="flag-xs flag-tr mr5 va-b"></span> Turkey</td>
                                            <td class="fs15 fw600 text-right">25%</td>
                                        </tr>
                                        <tr>
                                            <td class="va-m fw600 text-muted">
                                                <span class="flag-xs flag-fr mr5 va-b"></span> France</td>
                                            <td class="fs15 fw600 text-right">22%</td>
                                        </tr>
                                        <tr>
                                            <td class="va-m fw600 text-muted">
                                                <span class="flag-xs flag-in mr5 va-b"></span> India</td>
                                            <td class="fs15 fw600 text-right">18%</td>
                                        </tr>
                                        <tr>
                                            <td class="va-m fw600 text-muted">
                                                <span class="flag-xs flag-es mr5 va-b"></span> Spain</td>
                                            <td class="fs15 fw600 text-right">15%</td>
                                        </tr>
                                        <tr>
                                            <td class="va-m fw600 text-muted">
                                                <span class="flag-xs flag-de mr5 va-b"></span> Germany</td>
                                            <td class="fs15 fw600 text-right">12%</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>































@endsection