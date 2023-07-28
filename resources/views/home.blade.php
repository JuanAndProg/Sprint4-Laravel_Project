@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
    <div class="py-8 text-center">
        <h1 class="text-4xl font-semibold">SPRINT 4 PROJECT</h1>
        <p class="mt-4 text-lg">Welcome to the Sprint 4 Project! This is a web application designed to manage games and teams.</p>
    </div>

    <div class="flex justify-center space-x-4 mt-8">
        <a href="{{ route('games.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg">Create New Game</a>
        <a href="{{ route('teams.index') }}" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg">View Teams</a>
    </div>

    
@endsection
