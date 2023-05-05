<html lang="en"><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="VCwneBskMXArb8sQn6KeOWgRRzxZXFBcIR5arwqy">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        <!--  Style  -->
        @include('layouts.style')
</head>
<body>
@include('layouts.header')

<div class="container">
@include('layouts.sidebar')
{{ $slot }}
</div>
</body>
</html>