@extends('layouts.main')
@section('content')
    <div class="title">
      <h1>{{ $post->title }}</h1>
    </div>
    <div class="post-text">
      <h6>{{ $post->text }}</h6>
    </div>
    <div class="author">
      {{ $post->author }}
      {{ $post->created_at }}
    </div>
@endsection