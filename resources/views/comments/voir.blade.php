@extends('layout')
@section('content')
    <h1> {!!$comments->id!!}</h1>
    <p> {!!$comments->content!!}</p>
    <p> {!!$comments->state!!}</p>
@endsection
