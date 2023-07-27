@extends('layouts.plantilla')

@section('title', 'Results')

@section('content')

    <h1>Game Results</h1>
    <a href="{{route('home')}}">Back to home page</a>
    
    {{-- foreach games, show team A, team B, points A, points B, date --}}   
@endsection