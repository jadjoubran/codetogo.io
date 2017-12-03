<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Use Cases | Code to Go</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>

    @include('_partials.header_inner')
    <div class="container all">
        <h4 class="page-title">All Use Cases</h4>

        @foreach ($howto as $entry)
        <?php
        $date = new DateTime;
        $date->setTimestamp($page->date);
        ?>
        <a href="/{{ $entry->url() }}">
            <div class="card">
                <h3>{{ $entry->question() }}</h3>
                <h5>Last updated {{$date->format('M d, Y')}}</h5>
            </div>
        </a>
        @endforeach
    </div>

    @include('_partials.footer')
    @include('_partials.scripts')
</body>
</html>
