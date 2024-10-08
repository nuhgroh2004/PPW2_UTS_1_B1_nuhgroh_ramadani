<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Data pemain')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="app">
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
