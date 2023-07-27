@extends('layouts.plantilla')

@section('title', 'Edit Team')

@section('content')
    
    <h1>Edit your Team</h1>
    <a href="{{route('home')}}">Back to home page</a>
    <br>
    <br>
    <form action="{{route('teams.update', $team)}}" method="POST">

        @csrf
        @method('put')

        <label>
            Nombre:
            <input type="text" name="name" value="{{$team->name}}">
        </label>
        <br>
        <br>
        <button type="submit">Update</button>
    </form>    
@endsection