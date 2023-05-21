@extends('layouts.main')
@section('content')
    <div class="title">
      <h1>{{ $post->title }}</h1>
    </div>
    <div class="post-text">
      <h5>{{ $post->text }}</h5>
    </div>
    <div class="author">
      <h6>Тему создал: {{ $post->author }}</h6>
      <h6>Время: {{ $post->created_at }}</h6>
    </div>
@endsection