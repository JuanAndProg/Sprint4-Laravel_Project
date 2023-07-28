@extends('layouts.plantilla')

@section('title', $team->name)

@section('content')

    <h1>Team {{ $team->name }}</h1>
    <a href="{{ route('home') }}">Back to home page</a>
    <a href="{{ route('teams.index') }}">Back to team selection</a>
    <br>
    <br>
    <a href="{{ route('teams.edit', $team) }}">Edit Team</a>

    <br>
    <br>
    <form action="{{ route('teams.destroy', $team) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this team?');">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Team</button>
    </form>

@endsection
