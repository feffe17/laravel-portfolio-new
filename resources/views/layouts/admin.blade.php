<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title', 'Admin Area')</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>

</body>
</html>
