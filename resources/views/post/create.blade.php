@extends('layouts.main')
@section('content')
    <form action="{{route('post.store') }}" method="post">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Название статьи</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name ="title">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Краткое описание статьи</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="card_text">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Текст статьи</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="text">
        </div>
        <input type="hidden" name="author" value="{{ Auth::user()->name }}">
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <button type="submit" class="btn btn-primary">Создать</button>
    </form>
@endsection