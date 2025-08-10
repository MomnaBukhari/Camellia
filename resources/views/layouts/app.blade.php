<!doctype html>
<html>
<head>
    <title>@yield('title', 'Camellia')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            color: #333;
        }
        main {
            padding: 2rem;
        }
        a {
            text-decoration: none;
            color: #444;
            transition: color 0.3s ease;
        }
        a:hover {
            color: #2a9d8f;
        }
        nav {
            display: flex;
            gap: 1.5rem;
            padding: 1rem 2rem;
            background: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        /* Page animations */
        .fade-in {
            opacity: 0;
            animation: fadeIn 0.8s ease-in forwards;
        }
        @keyframes fadeIn {
            to { opacity: 1; }
        }

        /* Custom CSS section for each page */
        @yield('custom-css')
    </style>
</head>
<body>

@include('components.navbar')

<main class="fade-in">
    @yield('content')
</main>

<!-- Custom script section for each page -->
<script>
    @yield('custom-script')
</script>
</body>
</html>
