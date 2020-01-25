https://codetogo.io/
https://codetogo.io/all/
https://codetogo.io/about/
https://codetogo.io/javascript/
@foreach ($jsusecases as $usecase)
https://codetogo.io/{{ $usecase->url() }}/
@endforeach
https://codetogo.io/react/
@foreach ($reactusecases as $usecase)
https://codetogo.io/{{ $usecase->url() }}/
@endforeach
