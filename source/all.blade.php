<!DOCTYPE html>
<html lang="en">
<head>
    <title>Use Cases | Code to Go</title>
    @include('_partials.head')
</head>
<body>

    @include('_partials.header_inner')
    <div class="container all">
        <h4 class="page-title">All Use Cases</h4>

        @foreach ($howto as $entry)
        <?php
        $date = new DateTime;
        $date->setTimestamp($entry->date);
        ?>
        <a href="/{{ $entry->url() }}">
            <div class="card card-compact">
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
