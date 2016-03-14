@extends('layout')
@section('content')
    <h1> {!!$actors->biography!!}</h1>
    <p> {!!$actors->firstname!!}</p>
    <p> {!!$actors->lastname!!}</p>
    <h2> {!!$actors->city!!}</h2>
    <img style="..." src="{{ $actors->image }}"/>
@endsection
