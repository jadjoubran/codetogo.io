<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$page->question()}} | Code to Go</title>
    @include('_partials.head', ['question' => $page->question()])
</head>
<body class="howto">
    @include('_partials.header_inner')

    <?php
    $date = new DateTime;
    $date->setTimestamp($page->date);
    ?>

    <div class="container howto-container">

        <div class="card usecase-card" itemscope itemtype="http://schema.org/Question">
            <h2 itemprop="text">{{$page->question()}}</h2>
            <h5 itemprop="dateModified" datetime="{{$date->format('c')}}">
                Last updated {{$date->format('M d, Y')}}
            </h5>

            <div itemprop="suggestedAnswer acceptedAnswer" itemscope itemtype="http://schema.org/Answer">
                <div itemprop="text">
                    @yield('content')
                </div>
            </div>

            @if ($page->link)
            <div class="mdn-container">
                <a href="{{$page->link}}" target="_blank" rel="noopener"  itemprop="citation">MDN Docs</a>
            </div>
            @endif
        </div>
        @include('_partials/related')
    </div>


    @include('_partials.footer')
    @include('_partials.scripts')
</body>
</html>
