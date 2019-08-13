@extends('_layouts.master', ['is_landing' => true])

@section('body')
<div class="container landing">
    <div class="banner">
        <h1>Find up to date snippets for common JavaScript use cases</h1>
        <h4>Search for a use case:</h4>
        <input type="text" id="autocomplete" class="hide-till-ready" placeholder="How to loop through array in JavaScript">
    </div>
    <h4>Popular use cases</h4>

    <div class="card">
        <a href="/how-to-check-if-element-has-class-in-javascript/">
            <h3>How to check if element has class in JavaScript</h3>
        </a>
        <h5>Last updated Aug 24, 2018</h5>

        @include('_usecases.check-if-element-has-class')
    </div>
    <div class="card">
        <a href="/how-to-interpolate-in-javascript/">
            <h3>How to interpolate in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        @include('_usecases.interpolate')
    </div>
    <div class="card">
        <a href="/how-to-add-class-to-element-in-javascript/">
            <h3>How to add class to element in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        @include('_usecases.add-class-to-element')
    </div>
    <div class="card">
        <a href="/how-to-replace-spaces-with-dashes-in-javascript/">
            <h3>How to replace spaces with dashes in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        @include('_usecases.replace-spaces-with-dashes')
    </div>
    <div class="card">
        <a href="/how-to-reload-page-in-javascript/">
            <h3>How to reload page in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        @include('_usecases.reload-page')
    </div>
    <div class="card">
        <a href="/how-to-find-element-by-id-in-javascript/">
            <h3>How to find element by id in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        @include('_usecases.find-element-by-id')
    </div>
    <div class="card">
        <a href="/how-to-loop-through-array-in-javascript/">
            <h3>How to loop through array in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        @include('_usecases.loop-through-array')
    </div>
    <div class="card">
        <a href="/how-to-listen-to-click-event-in-javascript/">
            <h3>How to listen to click event in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        @include('_usecases.listen-to-click-event')
    </div>
    <div class="card">
        <a href="/how-to-get-keys-of-object-in-javascript/">
            <h3>How to get keys of object in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        @include('_usecases.get-keys-of-object')
    </div>
    <div class="card">
        <a href="/how-to-increment-a-variable-in-javascript/">
            <h3>How to increment a variable in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        @include('_usecases.increment-a-variable')
    </div>
    <div class="card">
        <a href="/how-to-uppercase-a-string-in-javascript/">
            <h3>How to uppercase a string in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        @include('_usecases.uppercase-a-string')
    </div>

</div>

@endsection
