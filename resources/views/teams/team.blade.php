
@extends('layouts.plantilla')

@section('title', "". $team->name)

@section('content')
    <h1>Team {{$team->name}}</h1>  
    <a href="{{route('home')}}">Back to home page</a>
    <a href="{{route('teams.index')}}">Back to team selection</a>
@endsection