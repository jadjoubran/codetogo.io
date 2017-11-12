<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>{{$page->question()}}</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        navbar

        <h1>{{$page->question()}}</h1>
        @yield('content')

        Last updated: {{$page->date}}

        @if ($page->link)
            <a href="{{$page->link}}" target="_blank">MDN Docs</a>
        @endif

        <script async src="/js/all.js"></script>
    </body>
</html>
