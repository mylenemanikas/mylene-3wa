@extends('layout')
@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-1 ">
            </div>
    <div class="col-xs-12 col-sm-6 col-md-10 ">
        <h1 class="fa fa-plus">Créer un film</h1>

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
        <form method="post" enctype="multipart/form-data" action="{{route('movies_enregistrer')}}">
            <!--important a mettre pour tout formulaire-->     {{csrf_field()}}


<p>
                <label for="title">Title:</label>
            <input name="title" id="title" value="{{old('title')}}" class="form-control" type="text">
                {{$errors->first('title')}}
</p>
             <!--// permets de mettre l'erreur a coté de la case title-->

            <label  for="synopsis">Synopsis:</label>

            <input  id="synopsis" name="synopsis" class="form-control"/>

            <label for="image">Image:</label>
            <input type="file" capture="capture" accept="image/*" name="image" id="image" />

            <p>
            </p>

            <label class="radio-inline mr10 ">Langue: </label>

                <input  name="langue" id="inlineRadio1" value="option1" type="radio">en

                <input name="langue" id="inlineRadio2" value="option2" type="radio">fr

                <input name="langue" id="inlineRadio3" value="option3" type="radio">es


            <p>
            </p>

            <label class="radio-inline">Bande Originale:</label>

                <input name="bo" id="inlineRadio4" value="option4" type="radio">vo

                <input name="bo" id="inlineRadio5" value="option5" type="radio">vost

                <input name="bo" id="inlineRadio6" value="option6" type="radio">vostfr



            <p>
            </p>

            <label  for="annee">Annee:</label>

            <input  id="annee" name="annee" class="form-control"/>
            <p>
            </p>
<p>
            <label  for="date_release" >date_release:</label>

            <input  id="date_release" class="form-control" name="date_release"/>
</p>

            <button type="submit"  class="btn btn-rounded btn-info btn-block boutoncreer">Créer un film</button>
            <div class="col-xs-12 col-sm-6 col-md-1 ">
                </div>
    </div>
    </div>
        </form>

@endsection
