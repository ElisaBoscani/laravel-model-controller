@extends('layouts.app')

@section('content')
<main id="film_css" class="pt-4">
  <h1 class="text-center p-2 pb-3">Film</h1>
  <div class=" container ">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-5 g-4">
      @foreach($movies as $movie)
      <div class="col">
        <div class="d-flex flex-column bg_film h-100 p-3  rounded border-1   ">
          <h5>{{$movie->title}}</h5>
          <span class=" fst-italic ">{{$movie->original_title}}</span>
          <span>{{$movie->nationality}}</span>
          <span>{{$movie->date}}</span>
          <span>{{$movie->vote}}</span>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</main>
@endsection