https://codetogo.io/
https://codetogo.io/all/
https://codetogo.io/about/
@foreach ($usecases as $usecase)
https://codetogo.io/{{ $usecase->url() }}/
@endforeach
