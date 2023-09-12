<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
            min-height: calc(100vh - 196px); /* Height of header + navigation + footer */
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-blue-500 py-4 text-white text-center">
        <h1 class="text-3xl font-bold">@yield('title')</h1>
    </header>

    <!-- Navigation -->
    <nav class="bg-gray-800 text-white px-4 py-2">
        <ul class="flex space-x-4">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{route('createTeam')}}">Create a team</a></li>
            <li><a href="{{route('games.create')}}">Create a game</a></li>
            <li><a href="{{route('teams.index')}}">Show all teams</a></li> 
            <li><a href="{{route('results')}}">Show games</a></li>
            <!-- Add more navigation items here -->
        </ul>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8 bg-gray-400 text-white rounded-lg font-body">
        @yield('content')
    </main>
    
    
    
    

    <!-- Footer -->
    <footer class="bg-gray-900 text-white text-center py-4">
        &copy; {{ date('Y') }} Sprint4-Laravel_Project
    </footer>

    <!-- Scripts -->
   {{--  <script src="{{ mix('js/app.js') }}"></script> --}}
</body>
</html>
