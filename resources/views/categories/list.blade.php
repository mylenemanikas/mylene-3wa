@extends('layout')
@section('content')
    <header id="topbar" class="alt">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-active">
                    <a href="dashboard.html">Categorie</a>
                </li>
                <li class="crumb-icon">
                    <a href="dashboard.html">
                        <span class="glyphicon glyphicon-home"></span>
                    </a>
                </li>
                <li class="crumb-link">
                    <a href="index.html">Home</a>
                </li>
                <li class="crumb-trail">Categories</li>
            </ol>
        </div>
        <div class="topbar-right">
            <div class="ib topbar-dropdown">
                <label for="topbar-multiple" class="control-label pr10 fs11 text-muted">Reporting Period</label>
                <select id="topbar-multiple" class="hidden" style="display: none;">
                    <optgroup label="Filter By:">
                        <option value="1-1">Last 30 Days</option>
                        <option value="1-2" selected="selected">Last 60 Days</option>
                        <option value="1-3">Last Year</option>
                    </optgroup>
                </select><div class="btn-group"><button type="button" class="multiselect dropdown-toggle btn btn-default btn-sm ph15" data-toggle="dropdown" title="Last 60 Days">Last 60 Days <b class="caret"></b></button><ul class="multiselect-container dropdown-menu pull-right"><li class="multiselect-item multiselect-group"><label>Filter By:</label></li><li><a href="javascript:void(0);"><label class="radio"><input type="radio" value="1-1"> Last 30 Days</label></a></li><li class="active"><a href="javascript:void(0);"><label class="radio"><input type="radio" value="1-2"> Last 60 Days</label></a></li><li><a href="javascript:void(0);"><label class="radio"><input type="radio" value="1-3"> Last Year</label></a></li></ul></div>
            </div>
            <div class="ml15 ib va-m" id="toggle_sidemenu_r">
                <a href="#" class="pl5"></a>

            </div>
        </div>
    </header>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-8">
            <h1 class="fa fa-plus">Liste de nos categories</h1>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-2">
            <p>
                <a href="{{ route('categories_creer')}}" class="fa fa-plus">

                    Creer une categorie
                </a>
            </p>
        </div>

        <div class="col-xs-6 col-md-2">
            <input type="text" id="icon-filter" class="form-control" placeholder="Enter search terms..">
        </div>
    </div>
    <table class="table table-hover">
        <thead>
        <tr class="info">
            <th>Titre</th>
            <th>Description</th>
            <th>Supprimer</th>
        </tr>
        </thead>

        @foreach($categories as $categorie)
            <tr>
                <td>
                    {{$categorie->title}}
                </td>
                <td>
                    {{$categorie->description}}
                </td>
                <td>
            <a href="{{route("category_supprimer",['id'=>$categorie->id]) }}">Supprimer</a>
                </td>
        @endforeach
@endsection
