@extends('layouts.plantilla')

@section('title', 'Select a Team')

@section('content')
    <div class="py-8">
        <h1 class="text-2xl font-semibold mb-4">Select a Team</h1>
        <div class="grid grid-cols-3 gap-3">
            @foreach($teams as $team)
                <a href="{{ route('teams.team', $team->id) }}" class="bg-white border border-gray-200 rounded-lg p-4 hover:bg-blue-100 transition duration-200">
                    <h2 class="text-lg text-black font-semibold">{{ $team->name }}</h2>
                    <p class="text-gray-500">{{ $team->description }}</p>
                </a>
            @endforeach
        </div>
    </div>

    <div class="mt-8">
        {{ $teams->links() }}
    </div>
@endsection
