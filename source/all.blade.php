@extends('_layouts/master', ['title' => 'Use Cases'])

@section('body')

<div class="container all">
    <h4 class="page-title">All Use Cases</h4>

    @foreach ($usecases as $entry)
    <?php
    $date = (new DateTime)->setTimestamp($entry->date);
    ?>
    <a href="/{{ $entry->url() }}">
        <div class="card card-compact">
            <h3>{{ $entry->question() }}</h3>
            <h5>Last updated {{$date->format('M d, Y')}}</h5>
        </div>
    </a>
    @endforeach
</div>

@endsection
