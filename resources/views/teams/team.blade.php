
@extends('layouts.plantilla')

@section('title', $team->name)

@section('content')
<<<<<<< HEAD
    <div class="py-8 flex justify-center">
        <h1 class="text-3xl font-semibold">Team {{ $team->name }}</h1>
    </div>

    <div class="flex justify-center space-x-4">
        <a href="{{ route('teams.edit', $team) }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg">Edit Team</a>

        <form action="{{ route('teams.destroy', $team) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this team?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg">Delete Team</button>
        </form>
    </div>
@endsection

=======
    <h1>Team {{$team->name}}</h1>  
    <a href="{{route('home')}}">Back to home page</a>
    <a href="{{route('teams.index')}}">Back to team selection</a>
@endsection
>>>>>>> 2aff91cecd200f0b516347176debbef68ed3cc43
