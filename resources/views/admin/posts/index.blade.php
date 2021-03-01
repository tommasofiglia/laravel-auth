@extends('layouts.dashboard')
@section('content')
<h1>Tutti i post per la sezione amministratore.</h1>
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Autore</th>
      <th>Titolo</th>
      <th>Testo</th>
      <th>Slug</th>
      <th>Creato il</th>
      <th>Editato il</th>
      <th>AZIONI</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($posts as $post)
    <tr>
      <td scope="row">{{$post->id}}</td>
      <td>{{$post->author}}</td>
      <td>{{$post->title}}</td>
      <td>{{$post->body}}</td>
      <td>{{$post->slug}}</td>
      <td>{{$post->created_at}}</td>
      <td>{{$post->updated_at}}</td>
      <td>
        <a href="{{route('admin.posts.show', ['post'=>$post->id])}}" class="btn btn-primary" style="margin-bottom: 10px">Leggi</a>
        <a href="#" class="btn btn-warning" style="margin-bottom: 10px">Modifica</a>
        <a href="#" class="btn btn-danger">Elimina</a>
      </td>
    </tr>
  @endforeach

  </tbody>
</table>

@endsection
