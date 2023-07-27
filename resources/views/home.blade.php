@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')

    <h1>Home Page</h1>
    <a href="{{route('create')}}">Create a team</a>
    <a href="{{route('games')}}">Create a game</a>
    <a href="{{route('teams.index')}}">Show all teams</a>    
    <a href="{{route('results')}}">Show games played</a>
    
@endsection