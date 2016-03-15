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
        <form method="post" action="{{route('movies_enregistrer')}}">
            <!--important a mettre pour tout formulaire-->     {{csrf_field()}}


<p>
                <label for="title">Title:</label>
            <input name="title" id="title" value="{{old('title')}}" class="gui-input" type="text">
                {{$errors->first('title')}}
</p>
             <!--// permets de mettre l'erreur a coté de la case title-->

            <label  for="synopsis">Synopsis:</label>

            <input  id="synopsis" name="synopsis"/>

            <div class="radio-custom radio-disabled mb10">
                <p>Langue:</p>
                <label for="languages">fr </label>
                <input type="radio" id="languages" name="languages" disabled="" checked="">
                <label for="languages">en </label>
                <input type="radio" id="languages" name="languages" disabled="" checked="">
                <label for="languages">es </label>
                <input type="radio" id="languages" name="languages" disabled="" checked="">
            </div>

            <div class="radio-custom radio-disabled mb10">
                <p>Bande Originale</p>
                <label for="bo">vo </label>
            <input type="radio" name="bo" value="vo">
                <label for="bo">vost </label>
            <input type="radio" name="bo" value="vost">
                <label for="bo">vostfr </label>
            <input type="radio" name="bo" value="vostfr">
            </div>


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
