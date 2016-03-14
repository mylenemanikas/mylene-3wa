@extends('layout')
@section('content')
        <h1>creer les films</h1>
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
            <input value="{{old('title')}}" name="title" id="title"/>
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
            <label  for="date_release">date_release:</label>
            <input  id="date_release" name="date_release"/>
</p>

            <button type="submit">Créer un film</button>
        </form>
@endsection
