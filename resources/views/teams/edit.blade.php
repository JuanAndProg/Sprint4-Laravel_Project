@extends('layouts.plantilla')

@section('title', 'Edit Team')

@section('content')
    
    <h1>Edit your Team</h1>

        @csrf
        @method('put')

        <label>
            Nombre:
            <input type="text" name="name" value="{{$team->name}}">
        </label>
        <br>
        <br>
        <button class="bg-blue-500 text-white px-4 py-2 rounded-lg" type="submit">Update</button>
    </form>    
@endsection