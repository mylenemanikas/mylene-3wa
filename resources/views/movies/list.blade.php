@extends('layout')
@section('content')
    <header id="topbar" class="alt">
        <div class="topbar-left">
            <ol class="breadcrumb">
                <li class="crumb-active">
                    <a href="dashboard.html">Movies</a>
                </li>
                <li class="crumb-icon">
                    <a href="dashboard.html">
                        <span class="glyphicon glyphicon-home"></span>
                    </a>
                </li>
                <li class="crumb-link">
                    <a href="index.html">Home</a>
                </li>
                <li class="crumb-trail">Movies</li>
            </ol>
        </div>
        <!--<div class="topbar-right">
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
        </div>-->
    </header>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 titrepage">
            <h1 class="fa fa-plus">Liste de nos films</h1>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 creerunfilm">
                <a href="{{ route('movies_creer')}}">
                    <button type="button" class="btn btn-rounded btn-info btn-block fa fa-plus">Creer un film</button>
                </a>
        </div>

        <div class="col-xs-6 col-md-3 search">
            <input type="text" id="icon-filter" class="form-control" placeholder="Enter search terms..">
        </div>
    </div>
    <table class="table table-hover">
        <thead>
        <tr class="info">
            <th>Id</th>
            <th>Image</th>
            <th>Titre</th>
            <th>Annee</th>
            <th>Budget</th>
            <th>Duree</th>
            <th>Visible</th>
            <th>Cover</th>
            <th>Description</th>
            <th>Note</th>
            <th>Supprimer</th>
            <th>Editer</th>


        </tr>
        </thead>


        @foreach($movies as $movie)
        <tr class="widthmovies">
            <td>
                {!!$movie->id!!}
                <a href="{{route("movies_panier",[
                'id'=>$movie->id
                ])}}">
                    @if(!array_key_exists($movie->id, session('id_movies',[])))
                        <i class="fa fa-heart"></i>
                        @else
                        <i class="fa fa-heart-o"></i>
                        @endif
                </a>
            </td>

            <td>
                <img style="width:80%;" src="{{ $movie->image }}"/>
            </td>
            <td>
                <h5>
                    <a href="{{ route('movies_voir',
        [
        "id"=>$movie->id
        ])}}">  {!!$movie->title!!}
                    </a>
                </h5>
            </td>
            <td>
            {!!$movie->annee!!}
            </td>
            <td>
                {!!$movie->budget!!}
            </td>
            <td>
                {!!$movie->duree!!}
            </td>

            <td>
                    @if($movie->visible==1)
                        <a href="{{ route('movies_visible',
                ["id" => $movie->id]
                 ) }}">
                            <p>visible</p>
                        </a>
                    @else
                        <a href="{{ route('movies_visible',
                ["id" => $movie->id]
                 ) }}">
                            <p>invisible</p>
                        </a>
                    @endif


            </td>
            <td>

                    @if($movie->cover==1)
                        <a href="{{ route('movies_cover',
                ["id" => $movie->id]
                 ) }}">
                            <p>cover</p>
                        </a>
                    @else
                        <a href="{{ route('movies_cover',
                ["id" => $movie->id]
                 ) }}">
                            <p>uncover</p>
                        </a>
                    @endif

            </td>
            <td class="description">
                {!!str_limit(strip_tags($movie->description),$limit="250",$end="...")!!}
            </td>
            <td>
                {!!str_repeat("<i class='glyphicon glyphicon-star'></i>", $movie->note_presse)!!}
            </td>
            <td>
                <a href="{{route("movies_supprimer",['id'=>$movie->id]) }}">Supprimer</a>
            </td>
            <td>
                <a href="{{route("movies_editer",['id'=>$movie->id]) }}">Editer</a>
            </td>
        </tr>
        @endforeach

    </table>


  @endsection
