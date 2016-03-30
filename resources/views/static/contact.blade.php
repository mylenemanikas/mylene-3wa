@extends('layout')

@section('content')
        <h1>Page de contact</h1>
    <hr/>
    <form action="{{route('submitemail')}}" method="post">
        {{csrf_field()}}
    <label for="nom">Nom</label>
    <input  placeholder="votre nom" class="form control" name="nom" id="nom">
        @if($errors->has('nom'))
            <p class="help-block text-danger">
{{$errors->first('nom')}}
</p>
        @endif
        <label for="email">Email</label>
        <input  placeholder="votre email" class="form control" name="email" id="email">
        @if($errors->has('email'))
            <p class="help-block text-danger">
                {{$errors->first('email')}}
            </p>
        @endif

        <label for="message">Message</label>
        <textarea placeholder="votre message" class="form control" name="message" id="message"></textarea>
        @if($errors->has('message'))
            <p class="help-block text-danger">
                {{$errors->first('message')}}
            </p>
        @endif

    <button class="btn btn primary"
    type="submit">Envoyer cet email</Button>
    </form>
@endsection
