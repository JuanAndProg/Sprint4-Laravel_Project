@extends('layouts.plantilla')

@section('title', 'Team List')

@section('content')
    <div class="py-8 flex justify-center">
        <h1 class="text-3xl font-semibold">Select a Team</h1>
    </div>
        <div class="grid grid-cols-3 gap-3">
            @foreach($teams as $team)
                <a href="{{ route('teams.team', $team->id) }}" class="bg-white border border-gray-200 rounded-lg p-4 hover:bg-blue-100 transition duration-200">
                    <h2 class="text-lg text-black font-semibold">{{ $team->name }}</h2>
                    
                </a>
            @endforeach

<<<<<<< HEAD
    </div>
=======
    <h1>Team Selection</h1>  
    <a href="{{route('create')}}">Create a new team</a>
    <a href="{{route('home')}}">Back to home page</a>
   
    <ul>
        @foreach($teams as $team)
            <li>
                <a href="{{route('teams.team', $team->id)}}"> {{$team->name}}
                </li>
        @endforeach
    </ul>
>>>>>>> 2aff91cecd200f0b516347176debbef68ed3cc43

    <div class="mt-8">
        {{ $teams->links() }}
    </div>
@endsection
