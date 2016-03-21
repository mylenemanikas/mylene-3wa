@extends('layout')
@section('content')
        <h1>creer des utilisateurs</h1>
        @if(count($errors->all()))
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" enctype="multipart/form-data" action="{{route('user_enregistrer')}}">
            <!--important a mettre pour tout formulaire-->     {{csrf_field()}}
            <p>
            <label for="username">Nom de l'utilisateur:</label>
            <input value="{{old('username')}}" name="username" id="username"/>
                {{$errors->first('username')}}
            </p>
             <!--// permets de mettre l'erreur a coté de la case title-->

            <label  for="email">Email:</label>
            <input  id="email" name="email"/>

            <label for="avatar">Image:</label>
            <input type="file" capture="capture" accept="image/*" name="avatar" id="avatar"/>

            <button type="submit">Créer un utilisateur</button>
        </form>
@endsection
