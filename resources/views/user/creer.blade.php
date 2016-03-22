@extends('layout')
@section('content')
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-1 ">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-10 ">
                <h1 class="fa fa-plus">creer des utilisateurs</h1>

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
                    <form method="post" enctype="multipart/form-data" action="{{route('user_enregistrer')}}">
                        <!--important a mettre pour tout formulaire-->     {{csrf_field()}}


                        <p>
                            <label for="username">Nom de l'utilisateur:</label>
                            <input value="{{old('username')}}" name="username" id="username" class="form-control"/>
                            {{$errors->first('username')}}
                        </p>
                        <label  for="email">Email:</label>
                        <input  id="email" name="email" class="form-control"/>

                        <label for="avatar">Image:</label>
                        <input type="file" capture="capture" accept="image/*" name="avatar" id="avatar" />

                        <button type="submit" class="btn btn-rounded btn-info btn-block boutoncreer">Créer un utilisateur</button>
                        <div class="col-xs-12 col-sm-6 col-md-1 ">
                        </div>
                </div>
            </div>
            </form>
@endsection
