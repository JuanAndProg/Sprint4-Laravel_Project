@extends('layouts.plantilla')

@section('title', 'Create your Games')

@section('content')

    <form method="post" action="{{ route('games.store') }}" class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-lg">
        @csrf
        <label for="teamA" class="block font-semibold mb-2 text-black">Team A:</label>
        <select name="teamA" id="teamA" onchange="updateTeamB()" required class="w-full rounded-lg border border-blue-500 focus:ring focus:ring-blue-200 text-black">
            <option value="">Select Team A</option>
            @foreach($teams as $team)
                <option value="{{ $team->id }}">{{ $team->name }}</option>
            @endforeach
        </select>

        <label for="teamB" class="block font-semibold mt-4 mb-2 text-black">Team B:</label>
        <select name="teamB" id="teamB" required class="w-full rounded-lg border border-blue-500 focus:ring focus:ring-blue-200 text-black">
            <option value="">Select Team B</option>
            @foreach($teams as $team)
                <option value="{{ $team->id }}">{{ $team->name }}</option>
            @endforeach
        </select>

        <div class="mt-4">
            <label for="pointsA" class="block font-semibold text-black">Points Team A:</label>
            <input type="number" name="pointsA" id="pointsA" {{ $status === 'pending' ? 'disabled' : '' }} required class="w-full rounded-lg border border-blue-500 focus:ring focus:ring-blue-200">
        </div>

        <div class="mt-4">
            <label for="pointsB" class="block font-semibold text-black">Points Team B:</label>
            <input type="number" name="pointsB" id="pointsB" {{ $status === 'pending' ? 'disabled' : '' }} required class="w-full rounded-lg border border-blue-500 focus:ring focus:ring-blue-200">
        </div>
        
        <div class="mt-4">
            <label for="status" class="block font-semibold text-black">Match Status:</label>
            <select name="status" id="status" onchange="togglePointsField()" required class="w-full rounded-lg border border-blue-500 focus:ring focus:ring-blue-200 text-black">
                <option value="pending" {{ $status === 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="played" {{ $status === 'played' ? 'selected' : '' }}>Played</option>
            </select>
        </div>

        <button class="mt-6 bg-blue-500 text-white px-4 py-2 rounded-lg" type="submit">Save</button>
    </form>

    <script>
        function updateTeamB() {
            const teamASelect = document.getElementById('teamA');
            const teamBSelect = document.getElementById('teamB');
            const selectedTeamA = teamASelect.value;

            // Actualiza el equipo seleccionado en teamB para que sea diferente de teamA
            for (let i = 0; i < teamBSelect.options.length; i++) {
                if (teamBSelect.options[i].value === selectedTeamA) {
                    teamBSelect.options[i].disabled = true;
                } else {
                    teamBSelect.options[i].disabled = false;
                }
            }
        }

        function togglePointsField() {
            const pointsAInput = document.getElementById('pointsA');
            const pointsBInput = document.getElementById('pointsB');
            const statusSelect = document.getElementById('status');
            const isPlayed = statusSelect.value === 'played';

            pointsAInput.disabled = !isPlayed;
            pointsBInput.disabled = !isPlayed;
        }

        // Llama a las funciones para actualizar la selección inicial y el estado de los campos de puntuación al cargar la página
        updateTeamB();
        togglePointsField();
    </script>
@endsection
