@extends('layouts.plantilla')

@section('title', 'Results')

@section('content')
    <h1>Game Results</h1>
    <a href="{{ route('home') }}">Back to home page</a>

    <table>
        <thead>
            <tr>
                <th>Team A</th>
                <th>Team B</th>
                <th>Points A</th>
                <th>Points B</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($results as $result)
                <tr>
                    <td>{{ $result->teamA->name }}</td>
                    <td>{{ $result->teamB->name }}</td>
                    <td>{{ $result->pointsA }}</td>
                    <td>{{ $result->pointsB }}</td>
                    <td>{{ $result->created_at }}</td>
                </tr>
            @endforeach
           
        </tbody>
    </table>
    <br>
            <br>
    {{$results->links()}}
@endsection
