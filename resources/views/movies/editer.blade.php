@extends('layout')
@section('content')

        <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-1 ">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-10 ">
                        <h1 class="fa fa-plus">Editer un film</h1>

                        <div >
                                @if(count($errors->all()))
                                        <div class="alert alert-danger">
                                                <ul>
                                                        @foreach($errors->all() as $error)
                                                                <li>{{$error}}</li>
                                                        @endforeach
                                                </ul>
                                        </div>
                                @endif
                                <form method="post" enctype="multipart/form-data" action="{{route('movies_modifier', ['id' => $movies->id])}}">
                                        <!--important a mettre pour tout formulaire-->     {{csrf_field()}}


                                        <p>
                                                <label for="title">Title:</label>
                                                <input name="title" id="title" value="

                                                " class="form-control" type="text">
                                                {{$errors->first('title')}}
                                        </p>
                                        <!--// permets de mettre l'erreur a coté de la case title-->

                                        <label  for="synopsis">Synopsis:</label>

                                        <input  id="synopsis" name="synopsis" value="{{$movies->synopsis}}"  class="form-control"/>

                                        <label for="image">Image:</label>
                                        <input type="file" capture="capture" accept="image/*"  name="image" id="image" />

                                        <p>
                                        </p>

                                        <label class="radio-inline mr10 ">Langue: </label>

                                        <input  name="langue" id="inlineRadio1"  value="{{$movies->languages}}"  type="radio">en

                                        <input name="langue" id="inlineRadio2" value="{{$movies->languages}}" type="radio">fr

                                        <input name="langue" id="inlineRadio3" value="{{$movies->languages}}" type="radio">es


                                        <p>
                                        </p>

                                        <label class="radio-inline">Bande Originale:</label>

                                        <input name="bo" id="inlineRadio4" value="{{$movies->bo}}" type="radio">vo

                                        <input name="bo" id="inlineRadio5" value="{{$movies->bo}}" type="radio">vost

                                        <input name="bo" id="inlineRadio6" value="{{$movies->bo}}" type="radio">vostfr



                                        <p>
                                        </p>

                                        <label  for="annee">Annee:</label>

                                        <input  id="annee" name="annee" class="form-control" value="{{$movies->annee}}"/>
                                        <p>
                                        </p>
                                        <p>
                                                <label  for="date_release" >date_release:</label>

                                                <input  id="date_release" class="form-control" name="date_release" value="{{$movies->date_release}}"/>
                                        </p>

                                        <button type="submit"  class="btn btn-rounded btn-info btn-block boutoncreer" >Editer un film</button>
                                        <div class="col-xs-12 col-sm-6 col-md-1 ">
                                        </div>
                        </div>
                </div>
                </form>
@endsection