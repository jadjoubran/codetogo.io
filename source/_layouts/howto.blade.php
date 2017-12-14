<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$page->question()}} | Code to Go</title>
    @include('_partials.head', ['question' => $page->question()])
</head>
<body class="howto">
    @include('_partials.header_inner')

<?php
$date = new DateTime;
$date->setTimestamp($page->date);
?>

    <div class="container howto-container">

        <div class="card">
            <h2>{{$page->question()}}</h2>
            <h5>Last updated {{$date->format('M d, Y')}}</h5>
            @yield('content')

            @if ($page->link)
            <div class="mdn-container">
                <a href="{{$page->link}}" target="_blank" rel="noopener">MDN Docs</a>
            </div>
            @endif
        </div>
    </div>

    @include('_partials.footer')
    @include('_partials.scripts')
</body>
</html>
