@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')

    <h1>Home Page</h1>
    <a href="{{route('createTeam')}}">Create a team</a>
    <a href="{{route('games.create')}}">Create a game</a>
    <a href="{{route('teams.index')}}">Show all teams</a>    
    <a href="{{route('results')}}">Show games played</a>

@endsection