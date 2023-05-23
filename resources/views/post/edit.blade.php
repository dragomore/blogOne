@extends('layouts.main')
@section('content')
    <form action="{{ route('post.update', $post->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Название статьи</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name ="title" value="{{ $post->title }}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Краткое описание статьи</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="card_text" value="{{ $post->card_text }}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Текст статьи</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="text" value="{{ $post->text }}">
        </div>
        <button type="submit" class="btn btn-primary">Редактировать</button>
    </form>
@endsection