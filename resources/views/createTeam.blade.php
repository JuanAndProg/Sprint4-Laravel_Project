@extends('layouts.plantilla')

@section('title', 'Create Team')

@section('content')
    
    <h1>Create a Team</h1>
    <a href="{{route('home')}}">Back to home page</a>

    <form action="">
        <label>
            Nombre:
            <input type="text" name="name">
        </label>
    </form>    
@endsection