@extends('layout')
@section('content')
    <header id="topbar" class="alt">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-active">
                    <a href="dashboard.html">Commentaires</a>
                </li>
                <li class="crumb-icon">
                    <a href="dashboard.html">
                        <span class="glyphicon glyphicon-home"></span>
                    </a>
                </li>
                <li class="crumb-link">
                    <a href="index.html">Home</a>
                </li>
                <li class="crumb-trail">Commentaires</li>
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
            <h1 class="fa fa-plus">Liste de nos commentaires</h1>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-2">
            <p>
                <a href="{{ route('comments_creer')}}" class="fa fa-plus">

                    Creer un commentaire
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
            <th>Id</th>
            <th>content</th>
            <th>date</th>
            <th>Supprimer</th>
            <th>Editer</th>
        </tr>
        </thead>

        @foreach($comments as $comment)
            <tr>
                <td>
                    {!!$comment->id!!}
                </td>
                <td>
                    <a href="{{ route('comments_voir',
        [
        "id"=>$comment->id
        ])}}">  {!!str_limit(strip_tags($comment->content),$limit="250",$end="...")!!}
                    </a>

                </td>
                <td>
                    {{$comment->date}}
                </td>
                <td>
                    <a href="{{route("comments_supprimer",['id'=>$comment->id]) }}">Supprimer</a>
                </td>
                <td>
                    <a href="{{route("comments_editer",['id'=>$comment->id]) }}">Editer</a>
                </td>
            </tr>
        @endforeach
    @endsection
