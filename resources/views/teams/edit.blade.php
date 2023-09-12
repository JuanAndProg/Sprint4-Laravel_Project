@extends('layouts.plantilla')

@section('title', 'Edit Team')

@section('content')
    
    <div class="py-8 flex justify-center">
        <h1 class="text-3xl font-semibold">Edit your Team</h1>
    </div>

        @csrf
        @method('put')

        <label>
            New name:
            <input type="text" name="name" value="{{$team->name}}">
        </label>
        <br>
        <br>
        <button class="bg-blue-500 text-white px-4 py-2 rounded-lg" type="submit">Update</button>
    </form>    
@endsection