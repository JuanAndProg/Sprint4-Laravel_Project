@extends('layouts.plantilla')

@section('title', 'Create your Games')

@section('content')
    @if(session('error'))
        <div style="color: red; margin-bottom: 10px;">{{ session('error') }}</div>
    @endif

    <form method="post" action="{{ route('games.store') }}">
        @csrf
        <label for="teamA">Team A:</label>
        <select name="teamA" id="teamA" onchange="updateTeamB()" required>
            <option value="">Select Team A</option>
            @foreach($teams as $team)
                <option value="{{ $team->id }}">{{ $team->name }}</option>
            @endforeach
        </select>

        <label for="teamB">Team B:</label>
        <select name="teamB" id="teamB" required>
            <option value="">Select Team B</option>
            @foreach($teams as $team)
                <option value="{{ $team->id }}">{{ $team->name }}</option>
            @endforeach
        </select>

        <label for="pointsA">Points Team A:</label>
        <input type="number" name="pointsA" id="pointsA" {{ $status === 'pending' ? 'disabled' : '' }} required>

        <label for="pointsB">Points Team B:</label>
        <input type="number" name="pointsB" id="pointsB" {{ $status === 'pending' ? 'disabled' : '' }} required>
        <br>
        <br>
        <label for="status">Match Status:</label>
        <select name="status" id="status" onchange="togglePointsField()" required>
            <option value="pending" {{ $status === 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="played" {{ $status === 'played' ? 'selected' : '' }}>Played</option>
        </select>

        <button class="bg-blue-500 text-white px-4 py-2 rounded-lg" type="submit">Save</button>
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
