@extends('_layouts/master', ['title' => 'Use Cases'])

@section('body')
<?php
// $categories = $usecases->unique('category');
// $filter = 'functions';
// $title = $filter ? $filter :'All';

// $filteredUsecases = $usecases;
// if ($filter){
//     $filteredUsecases = $usecases->where('category', $filter);
// }
?>

<div class="container all">
    <h4 class="page-title">All Use Cases</h4>

    @foreach ($usecases as $usecase)
    <?php
    $date = (new DateTime)->setTimestamp($usecase->date);
    ?>
    <a href="/{{ $usecase->url() }}">
        <div class="card card-compact">
            <h3>{{ $usecase->question() }}</h3>
            <h5>Last updated {{$date->format('M d, Y')}}</h5>
        </div>
    </a>
    @endforeach
</div>

@endsection
