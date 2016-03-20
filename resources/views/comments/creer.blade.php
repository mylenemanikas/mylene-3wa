@extends('layout')
@section('content')
        <h1> creer des commentaires</h1>
        @if(count($errors->all()))
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{route('comments_enregistrer')}}">
            <!--important a mettre pour tout formulaire-->     {{csrf_field()}}
            <label for="firstname">Firstname:</label>
            <input name="firstname" id="firstname"/>
            <label for="lastname">Lastname:</label>
            <textarea id="lastname" name="lastname"></textarea>
            <button type="submit">Créer cet acteur</button>
        </form>
    @endsection
