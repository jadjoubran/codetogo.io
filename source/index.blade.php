@extends('_layouts.landing')

@section('body')
<div class="container">
    <div class="banner">
        <h1>JavaScript code to go</h1>
        <h4>Find updated snippets for common JavaScript use cases</h4>
        <input type="text" id="autocomplete" placeholder="How to loop through array in JavaScript">
    </div>
    <h4>Popular use cases</h4>

    <div class="card">
        <a href="/how-to-interpolate-in-javascript/">
            <h3>How to interpolate in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        @include('_howto.interpolate')
    </div>
    <div class="card">
        <a href="/how-to-add-class-to-element-in-javascript/">
            <h3>How to add class to element in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        @include('_howto.add-class-to-element')
    </div>
    <div class="card">
        <a href="/how-to-replace-spaces-with-dashes-in-javascript/">
            <h3>How to replace spaces with dashes in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        @include('_howto.replace-spaces-with-dashes')
    </div>
    <div class="card">
        <a href="/how-to-reload-page-in-javascript/">
            <h3>How to reload page in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        @include('_howto.reload-page')
    </div>
    <div class="card">
        <a href="/how-to-find-element-by-id-in-javascript/">
            <h3>How to find element by id in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        @include('_howto.find-element-by-id')
    </div>
    <div class="card">
        <a href="/how-to-loop-through-array-in-javascript/">
            <h3>How to loop through array in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        @include('_howto.loop-through-array')
    </div>
    <div class="card">
        <a href="/how-to-listen-to-click-event-in-javascript/">
            <h3>How to listen to click event in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        @include('_howto.listen-to-click-event')
    </div>
    <div class="card">
        <a href="/how-to-get-keys-of-object-in-javascript/">
            <h3>How to get keys of object in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        @include('_howto.get-keys-of-object')
    </div>
    <div class="card">
        <a href="/how-to-increment-a-variable-in-javascript/">
            <h3>How to increment a variable in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        @include('_howto.increment-a-variable')
    </div>
    <div class="card">
        <a href="/how-to-uppercase-a-string-in-javascript/">
            <h3>How to uppercase a string in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        @include('_howto.uppercase-a-string')
    </div>

</div>
@endsection
