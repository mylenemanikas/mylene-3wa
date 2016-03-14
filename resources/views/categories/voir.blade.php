@extends('layout')
@section('content')
    <h1> {{$categories->title}}</h1>
    <p> {{$categories->description}}</p>
    <p> {{$categories->image}}</p>
    <img style="..." src="{{ $categories->image }}"/>
@endsection

