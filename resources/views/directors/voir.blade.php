@extends('layout')
@section('content')
    <h1> {{$directors->biography}}</h1>
    <p> {{$directors->firstname}}</p>
    <p> {{$directors->lastname}}</p>
    <h2> {{$directors->dob}}</h2>
    <img style="..." src="{{ $directors->image }}"/>
@endsection

