@extends('layouts.plantilla')

@section('title', 'Edit Team')

@section('content')
    
    <div class="py-8 flex justify-center">
        <h1 class="text-3xl font-semibold">Edit your Team</h1>
    </div>

    <form method="POST" action="{{ route('teams.update', $team) }}">
        @csrf
        @method('PUT')

        <label for="name">New name:</label>
        <input type="text" name="name" value="{{ $team->name }}">
        
        <br>
        <br>
        
        <button class="bg-blue-500 text-white px-4 py-2 rounded-lg" type="submit">Update</button>
    </form>    
@endsection