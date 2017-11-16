<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/main.css">
    <title>Code to Go</title>
</head>
<body>
    @include('_partials.header')

    @yield('body')

    @include('_partials.footer')

    @include('_partials.scripts')
</body>
</html>
