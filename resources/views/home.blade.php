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
                    @foreach ($userPosts as $key)
                        <div class="card" style="width: 18rem; margin-top: 10px; margin-left: 10px;">
                            <div class="card-body">
                            <h5 class="card-title">{{ $key->title }}</h5>
                            <p class="card-text">{{ $key->card_text }}</p>
                            <a href="/post/{{ $key->id }}" class="btn btn-primary">Читать</a>
                            <a href="#" class="btn btn-primary">Редактировать</a>
                            <a href="#" class="btn btn-primary" style="margin-top: 5px;">Удалить</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
