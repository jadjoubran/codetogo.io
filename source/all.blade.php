@foreach ($howto as $entry)
<div>
    <a href="/{{ $entry->url() }}" target="_blank">{{ $entry->question() }}</a>
</div>
@endforeach
