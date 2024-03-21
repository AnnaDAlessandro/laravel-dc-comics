@extends('layouts.app')

@section('title','DC COMICS| Read Show')

@section('main')

<main>
    <h2>{{$comic->title}}</h2>
     <p>{{$comic->description}}</p>
</main>

@endsection
