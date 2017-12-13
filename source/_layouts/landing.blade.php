<!DOCTYPE html>
<html lang="en">
<head>
    <title>Code to Go</title>
    @include('_partials.head')
</head>
<body>
    @include('_partials.header')

    @yield('body')

    @include('_partials.footer')

    @include('_partials.scripts')
</body>
</html>
