@extends('layout')
@section('content')
        <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-1 ">
                </div>
                <div class="col-xs-12 col-sm-6 col-md-10 ">
                        <h1 class="fa fa-plus">Editer des réalisateurs</h1>

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
                                <form method="post" enctype="multipart/form-data" action="{{route('directors_modifier', ['id' => $directors->id])}}">
                                        <!--important a mettre pour tout formulaire-->     {{csrf_field()}}


                                        <p>
                                                <label for="firstname">Firstname:</label>
                                                <input name="firstname" id="firstname" class="form-control"/>

                                        </p>
                                        <label for="lastname">Lastname:</label>
                                        <input name="lastname" id="lastname" class="form-control"/>

                                        <label for="image">Image:</label>
                                        <input type="file" capture="capture" accept="image/*" name="image" id="image"/>

                                        <button type="submit" class="btn btn-rounded btn-info btn-block boutoncreer">Editer un réalisateur</button>
                                        <div class="col-xs-12 col-sm-6 col-md-1 ">
                                        </div>
                        </div>
                </div>

                </form>
@endsection
