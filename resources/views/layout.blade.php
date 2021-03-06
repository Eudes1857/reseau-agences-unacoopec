<!doctype html>
<head>
    <title>Résau d'agence</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body style="font-family: Open Sans, sans-serif">
<section class="px-6 py-8">

    @yield('content')

    <footer>

    </footer>
</section>
</body>
