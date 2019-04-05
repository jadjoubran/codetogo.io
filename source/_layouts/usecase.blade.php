@extends('_layouts/master', [
    'title' => $page->question(),
    'question' => $page->question(),
    'reference' => $page->reference,
])

@section('body')
    <div class="container usecase">

    <?php
    $date = new DateTime;
    $date->setTimestamp($page->date);
    ?>
        <div class="card usecase-card" itemprop="mainEntity" itemscope itemtype="http://schema.org/Question">
            <h2 itemprop="text name">{{$page->question()}}</h2>
            <div class="usecase-subtitle">
                @if ($page->category)
                    <div class="category">{{ucfirst($page->category)}}</div>
                @endif
                <h5 itemprop="dateModified dateCreated" datetime="{{$date->format('c')}}">
                    Last updated {{$date->format('M d, Y')}}
                </h5>
            </div>

            <div itemprop="suggestedAnswer acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                <div itemprop="text">
                    @yield('content')
                </div>
                <div class="hidden" itemprop="dateCreated">
                    {{$date->format('M d, Y')}}
                    <div itemprop="upvoteCount">1</div>
                    <h3 itemprop="author">Jad Joubran</h3>
                    <a href="{{$page->link}}" itemprop="url">See answer</a>
                </div>
            </div>

            <div class="hidden">
                <span itemprop="answerCount">1</span>
                <h3 itemprop="author">Jad Joubran</h3>
            </div>

            @if ($page->link)
            <div class="mdn-container">
                @if ($page->reference)
                    <a href="{{$page->link}}" target="_blank" rel="noopener"  itemprop="citation">{{$page->reference}} on MDN</a>
                @else
                    <a href="{{$page->link}}" target="_blank" rel="noopener"  itemprop="citation">MDN Docs</a>
                @endif
            </div>
            @endif
            <div class="learn-javascript-container">
                <a href="https://learnjavascript.online/?utm_source=codetogo.io" target="_blank" rel="noopener" class="learn-javascript">Learn JavaScript step by step</a>
            </div>
        </div>
        @include('_partials/share')
        @include('_partials/related')
    </div>

@endsection
