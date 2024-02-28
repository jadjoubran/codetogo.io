@extends('_layouts.master', ['is_landing' => true])

@section('body')
<div class="container landing">
    <div class="banner">
        <h1>Find up to date snippets for <a href="https://learnjavascript.online?utm_source=codetogo.io" target="_blank" rel="noopener" style="color: inherit">JavaScript</a> &amp; <a href="https://react-tutorial.app?utm_source=codetogo.io" target="_blank" rel="noopener" style="color: inherit">React</a> use cases</h1>
        <h4>Search for a use case:</h4>
        <input type="text" id="autocomplete" class="hide-till-ready" placeholder="How to loop through array in JavaScript">
    </div>
    <h4>Popular use cases</h4>
    <div class="card">
        <a href="/how-to-check-if-element-has-class-in-javascript/">
            <h3>How to check if element has class in JavaScript</h3>
        </a>
        <h5>Last updated Feb 26, 2024</h5>

        @include('_jsusecases.check-if-element-has-class')
    </div>
    <div class="card">
        <a href="/how-to-get-last-array-element-in-javascript/">
            <h3>How to get last array element in JavaScript</h3>
        </a>
        <h5>Last updated Feb 28, 2024</h5>

        @include('_jsusecases.get-last-array-element')
    </div>
    <div class="card">
        <a href="/how-to-add-multiple-classes-to-element-in-javascript/">
            <h3>How to add multiple classes to element in JavaScript</h3>
        </a>
        <h5>Last updated Sep 22, 2018</h5>

        @include('_jsusecases.add-multiple-classes-to-element')
    </div>
    <div class="card">
        <a href="/how-to-replace-spaces-with-dashes-in-javascript/">
            <h3>How to replace spaces with dashes in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        @include('_jsusecases.replace-spaces-with-dashes')
    </div>
    <div class="card">
        <a href="/how-to-loop-through-array-in-javascript/">
            <h3>How to loop through array in JavaScript</h3>
        </a>
        <h5>Last updated Feb 22, 2020</h5>

        @include('_jsusecases.loop-through-array')
    </div>
    <div class="card">
        <a href="/how-to-listen-to-click-event-in-javascript/">
            <h3>How to listen to click event in JavaScript</h3>
        </a>
        <h5>Last updated Nov 11, 2017</h5>

        @include('_jsusecases.listen-to-click-event')
    </div>
</div>

@endsection
