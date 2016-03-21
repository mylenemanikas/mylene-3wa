@extends('layout')
@section('content')
    <h1> {!!$commentaires->biography!!}</h1>
    <p> {!!$commentaires->firstname!!}</p>
    <p> {!!$commentaires->lastname!!}</p>
    <h2> {!!$commentaires->city!!}</h2>
    <img style="..." src="{{ $commentaires->image }}"/>
@endsection
