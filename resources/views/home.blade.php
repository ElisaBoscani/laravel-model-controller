@extends('layouts.app')

@section('content')

<div class=" container ">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-5 g-3">
    @foreach($movies as $movie)
    <div class="col d-flex flex-column">
      <h4>{{$movie->title}}</h4>
      <span>{{$movie->original_title}}</span>
      <span>{{$movie->nationality}}</span>
      <span>{{$movie->date}}</span>
      <span>{{$movie->vote}}</span>
    </div>
    @endforeach
  </div>
</div>

@endsection