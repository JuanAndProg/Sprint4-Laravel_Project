@extends('layouts.plantilla')

@section('title', 'Team Selection')

@section('content')

    <h1>Team Selection</h1>  
    <a href="{{route('createTeam')}}">Create a new team</a>
    <a href="{{route('home')}}">Back to home page</a>
   
    <ul>
        @foreach($teams as $team)
            <li>
                <a href="{{route('teams.team', $team->id)}}"> {{$team->name}}
                </li>
        @endforeach
    </ul>

    {{$teams->links()}}
@endsection