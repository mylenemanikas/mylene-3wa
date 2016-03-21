@extends('layout')
@section('content')
    <div class="container">
    <div class="col-xs-12 col-sm-6 col-md-12 titrepage">
        <h1 class="fa fa-plus">Créer un film</h1>
    </div>
    </div>
    <div class="formulaire">
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
            <input name="title" id="title" value="{{old('title')}}" class="gui-input" type="text">
                {{$errors->first('title')}}
</p>
             <!--// permets de mettre l'erreur a coté de la case title-->

            <label  for="synopsis">Synopsis:</label>

            <input  id="synopsis" name="synopsis"/>

            <label for="image">Image:</label>
            <input type="file" capture="capture" accept="image/*" name="image" id="image"/>

            <p>
            </p>

            <label class="radio-inline mr10 ">Langue: </label>

                <input name="langue" id="inlineRadio1" value="option1" type="radio">en

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

            <input  id="annee" name="annee"/>
            <p>
            </p>
<p>
            <label  for="date_release">date_release:</label>

            <input  id="date_release" name="date_release"/>
</p>

            <button type="submit">Créer un film</button>
        </form>

@endsection
