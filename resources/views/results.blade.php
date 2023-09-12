@extends('layouts.plantilla')

@section('title', 'Game Results')

@section('content')
<<<<<<< HEAD
    <div class="py-8 flex justify-center">
        <table class="w-full max-w-3xl bg-white shadow-md rounded-lg overflow-hidden">
           <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Team A</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Team B</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Points A</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Points B</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($results as $result)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900">{{ $result->teamA->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900">{{ $result->teamB->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900">{{ $result->pointsA }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900">{{ $result->pointsB }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900">{{ $result->created_at }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900">{{ $result->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4 flex justify-center">
        {{ $results->links() }}
    </div>
@endsection
=======
    <h1>Game Results</h1>
    <a href="{{route('home')}}">Back to home page</a>   
@endsection
>>>>>>> 2aff91cecd200f0b516347176debbef68ed3cc43
