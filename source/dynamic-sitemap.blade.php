https://codetogo.io/
https://codetogo.io/all/
https://codetogo.io/about/
@foreach ($howto as $entry)
https://codetogo.io/{{ $entry->url() }}/
@endforeach
