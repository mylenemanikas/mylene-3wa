@extends('layout')
@section('content')
        <h1>creer des réalisateurs</h1>
        @if(count($errors->all()))
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" enctype="multipart/form-data"  action="{{route('directors_enregistrer')}}">
            <!--important a mettre pour tout formulaire-->     {{csrf_field()}}
            <label for="firstname">Firstname:</label>
            <input name="firstname" id="firstname"/>
            <label for="lastname">Lastname:</label>
            <textarea id="lastname" name="lastname"></textarea>
            <label for="image">Image:</label>
            <input type="file" capture="capture" accept="image/*" name="image" id="image"/>

            <button type="submit">Créer un réalisateur</button>
        </form>
@endsection
