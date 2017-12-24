@if ($page->related)
<div class="related">

    <h4>Related use cases</h4>

    @foreach (explode(',', $page->related) as $usecase)
    <a href="/how-to-{{$usecase}}-in-javascript/">
        <div class="card card-compact">
            <h3>How to {{str_replace('-', ' ', $usecase)}} in JavaScript</h3>
        </div>
    </a>
    @endforeach
</div>
@endif
