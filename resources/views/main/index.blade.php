@extends('layouts.main')
@section('content')
    @foreach ($posts as $post)
        <div class="card" style="width: 18rem; margin-top: 10px; margin-left: 10px;">
            {{-- <img src="..." class="card-img-top" alt="..."> --}}
            <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->card_text }}</p>
            <a href="/post/{{ $post->id }}" class="btn btn-primary">Читать</a>
            </div>
        </div>
    @endforeach
@endsection