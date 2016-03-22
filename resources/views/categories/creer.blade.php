@extends('layout')
@section('content')





        <div class="col-xs-12 col-sm-6 col-md-1 ">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-10 ">
            <h1 class="fa fa-plus">creer des catégories</h1>

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
                <form method="post" enctype="multipart/form-data" action="{{route('categories_enregistrer')}}">
                    <!--important a mettre pour tout formulaire-->     {{csrf_field()}}


                    <p>
                        <label for="title">Titre:</label>
                        <input name="title" id="title" class="form-control"/>

                    </p>
                    <label for="image">Image:</label>
                    <input type="file" capture="capture" accept="image/*" name="image" id="image"/>

                    <label for="description">Description:</label>
                    <textarea id="description" name="description" class="form-control"></textarea>

                    <button type="submit" class="btn btn-rounded btn-info btn-block boutoncreer">Créer une catégorie</button>
                    <div class="col-xs-12 col-sm-6 col-md-1 ">
                    </div>
            </div>
        </div>

        </form>
@endsection