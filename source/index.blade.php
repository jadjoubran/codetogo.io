@extends('_layouts.master', ['is_landing' => true])

@section('body')
<div class="container landing">
    <div class="banner">
        <h1>Find up to date snippets for common JavaScript use cases</h1>
        <h4 class="subscribe-cta">Click here to get weekly updates in your inbox</h4>
        <input type="text" id="autocomplete" class="hide-till-ready" placeholder="How to loop through array in JavaScript">
    </div>
    <h4>Popular use cases</h4>

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

<div id="subscribe">
  <div id="subscribe-close">
    <svg fill="#a4b1c1" width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
      <path d="M0 0h24v24H0z" fill="none"></path>
  </svg>
</div>
<iframe id="subscribe-popup" frameborder="0" src="https://upscri.be/22bdcc/?as_embed"></iframe>
</div>
@endsection
