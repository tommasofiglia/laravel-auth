@extends('layouts.app')
@section('content')

  <h1>Articoli del blog</h1>

  @foreach ($posts as $post)
    <div class="card my-5">
      <div class="card-body">
        <h2 class="card-title text-center">
          <a href="#" style="color: black">{{$post->title}}</a>
        </h2>
        <p class="card-text">{{$post->body}}</p>
      </div>
    </div>
  @endforeach

@endsection
