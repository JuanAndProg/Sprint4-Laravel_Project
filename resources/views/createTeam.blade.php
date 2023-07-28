@extends('layouts.plantilla')

@section('title', 'Create Team')

@section('content')
    
      @csrf

        <label>
            Name:
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
        @enderror
        <br>
        <br>
        <button class="bg-blue-500 text-white px-4 py-2 rounded-lg" type="submit">Confirm</button>
    </form>    
@endsection