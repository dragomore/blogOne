@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Профиль') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        Posts: {{ $posts }}
                    </div>
                    <hr>  
                    <a href="{{ route('post.create') }}" type="button" class="btn btn-success">Новая статья</a>
                    @foreach ($userPosts as $key)
                        <div class="card" style="width: 18rem; margin-top: 10px;">
                            <div class="card-body">
                            <h5 class="card-title">{{ $key->title }}</h5>
                            <p class="card-text">{{ $key->card_text }}</p>
                            <a href="/posts/{{ $key->id }}" class="btn btn-primary">Читать</a>
                            <a href="{{ route('post.edit', $key->id) }}" class="btn btn-primary">Редактировать</a>
                            <form style="margin-top: 5px;" action="{{ route('post.delete', $key->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-primary">Удалить</button>
                            </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
