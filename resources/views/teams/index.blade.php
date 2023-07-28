@extends('layouts.plantilla')

@section('title', 'Select a Team')

@section('content')
<ul>
        @foreach($teams as $team)
            <li>
                <a href="{{route('teams.team', $team->id)}}"> {{$team->name}}
                </li>
        @endforeach
    </ul>

    {{$teams->links()}}
@endsection