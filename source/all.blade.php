@extends('_layouts/master', ['title' => 'Use Cases'])

@section('body')

<div class="container all">
    <h4 class="page-title">All Use Cases</h4>

    <a href="/javascript">
        <div class="card card-compact">
            <h3>JavaScript use cases</h3>
            <h5>See all {{$jsusecases->count()}} use cases</h5>
        </div>
    </a>
    <a href="/react">
        <div class="card card-compact">
            <h3>React use cases</h3>
            <h5>See all {{$reactusecases->count()}} use cases</h5>
        </div>
    </a>
</div>

@endsection
