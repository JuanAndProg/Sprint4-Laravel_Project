@extends('layouts.plantilla')

@section('title', 'Create Team')

@section('content')

    <form method="post" action="{{ route('create.store') }}" class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-lg">
        @csrf

        <div class="mt-4">
            <label for="name" class="block font-semibold text-black">Name:</label>
            <input type="text" name="name" value="{{old('name')}}" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring focus:ring-blue-200">
        </div>
        @error('name')
            <div class="mt-2 text-red-500 text-sm">{{ $message }}</div>
        @enderror

        <button class="mt-6 bg-blue-500 text-white px-4 py-2 rounded-lg" type="submit">Confirm</button>
    </form>    
@endsection
