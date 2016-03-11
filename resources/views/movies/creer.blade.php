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

            <label for="languages">Langue : </label>
            <input type="radio" name="langue" value="fr"> fr
            <input type="radio" name="langue" value="en"> en
            <input type="radio" name="langue" value="es"> es

            <label for="bo">Bo : </label>
            <input type="radio" name="bo" value="vo"> vo
            <input type="radio" name="bo" value="vost"> vost
            <input type="radio" name="bo" value="vostfr"> vostfr


            <label  for="annee">Annee:</label>
            <input  id="annee" name="annee"/>

            <label  for="date_release">date_release:</label>
            <input  id="date_release" name="date_release"/>


            <button type="submit">Créer un film</button>
        </form>
@endsection
