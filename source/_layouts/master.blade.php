<!DOCTYPE html>
<html lang="en" @if (isset($question)) itemscope itemtype="http://schema.org/QAPage" @endif>
<head>
    <title>{{isset($title) ? "$title | Code to go" : "Code to go"}}</title>

    @if (isset($question))
        @include('_partials.head', ['question' => $question, 'reference' => $reference])
    @else
        @include('_partials.head')
    @endif
</head>
<body>

    @if (isset($is_landing))
        @include('_partials.header')
    @else
        @include('_partials.header_inner')
    @endif

    @yield('body')

    @include('_partials.footer')

    @include('_partials.scripts')
</body>
</html>
