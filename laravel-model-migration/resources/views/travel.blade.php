@extends('layout.app')

@section('title', 'Travel Boxes')

@section('main_content')

    @foreach ($travels as $travel)
    <h1>{{$travel->name}}</h1>
    <p>{{$travel->description}}</p>
    <h5>{{$travel->price}}</h5>
    <h4>{{$travel->destination}}</h4>
    @endforeach
@endsection