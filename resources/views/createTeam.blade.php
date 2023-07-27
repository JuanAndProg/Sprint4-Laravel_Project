@extends('layouts.plantilla')

@section('title', 'Create Team')

@section('content')
    
    <h1>Create a Team</h1>
    <a href="{{route('home')}}">Back to home page</a>
    <br>
    <br>
    <form action="{{route('create.store')}}" method="POST">

        @csrf

        <label>
            Nombre:
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
        @enderror
        <br>
        <br>
        <button type="submit">Confirm</button>
    </form>    
@endsection