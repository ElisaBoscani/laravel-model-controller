@extends('layouts.app')

@section('content')

<div class=" container ">
  <div class="row row-cols-1 row-cols-md-2 g-3">
    @foreach($movies as $movie)
    <div class="col">
      <h3>{{$movie->title}}</h3>
    </div>
    @endforeach
  </div>
</div>

@endsection