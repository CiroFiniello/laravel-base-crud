<!DOCTYPE html>
<html lang="en">
<head>
    @yield('style')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title', 'laravello')</title>
    @yield('head-cdn')
    @vite('resources/js/app.js')
</head>
<body>
    @include('pages.partials.header')

    <main>

        @yield('main-content')
    </main>

    @yield('custom-scripts')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
