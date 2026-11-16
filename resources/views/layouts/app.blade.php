<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title', 'Ruang Belanja')</title>
    <link rel="stylesheet" href="{{ asset('css/store.css') }}">
</head>
<body>
    <main class="container" style="max-width:480px;margin:48px auto">
        @include('layouts.flash')
        @yield('content')
    </main>
    <script src="{{ asset('js/store.js') }}" defer></script>
</body>
</html>