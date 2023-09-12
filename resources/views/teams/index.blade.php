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

    </div>

    <div class="mt-8">
        {{ $teams->links() }}
    </div>
@endsection
