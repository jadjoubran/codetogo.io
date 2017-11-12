@extends('_layouts.landing')

@section('body')
<div class="container">
    <div class="banner">
        <h1>JavaScript code to go</h1>
        <h4>Find updated snippets for common JavaScript use cases</h4>
        <input type="search" class="autocomplete">
    </div>
    <h4>Popular use cases</h4>

    <div class="card">
        <h3>How to loop through array in JavaScript</h3>
        <h5>Last updated Nov 13, 2017</h5>

        @include('_howto.loop-through-array')
    </div>
    <div class="card">
        <h3>How to add class to element in JavaScript</h3>
        <h5>Last updated Nov 13, 2017</h5>

        @include('_howto.add-class-to-element')
    </div>
    <div class="card">
        <h3>How to find element by id in JavaScript</h3>
        <h5>Last updated Nov 13, 2017</h5>

        @include('_howto.find-element-by-id')
    </div>
</div>
@endsection
