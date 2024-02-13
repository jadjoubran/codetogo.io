@extends('_layouts/master', ['title' => 'About'])

@section('body')

<div class="container about">
    <div class="card">
        <h3>About Code to go</h3>
        <p class="about-text">
            Code to go aims to help developers learning JavaScript find up to date, accurate and ready to use snippets of JavaScript code for common use cases.<br>
            If you want to suggest a common use case, please create a new issue on the github repository by clicking on <a href="https://github.com/jadjoubran/codetogo.io/issues/new?title=Use+Case+Suggestion: " target="_blank" rel="noopener">Contribute</a>.
        </p>
        <h3>Courses by Jad</h3>
        <p class="about-text">
            If you like CodeToGo, check out the following courses:
        </p>
        <ul class="about-text">
            <li><a href="https://learnjavascript.online/?utm_source=codetogo.io" target="_blank">Learn JavaScript</a></li>
            <li><a href="https://learntypescript.online/?utm_source=codetogo.io" target="_blank">Learn TypeScript</a></li>
            <li><a href="https://learnprogramming.online/?utm_source=codetogo.io" target="_blank">Learn Programming</a></li>
            <li><a href="https://learnhtmlcss.online/?utm_source=codetogo.io" target="_blank">Learn HTML CSS</a></li>
            <li><a href="https://react-tutorial.app/?utm_source=codetogo.io" target="_blank">React Tutorial</a></li>

        </ul>
    </div>
</div>

@endsection
