@extends('layouts.app')
@section('content')
<div class="container">
    <div class="dashboard row justify-content-center">
        <div class="div col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vos posts') }}</div>
                <div class="card-body">
                    @foreach($posts as $post)
                        <div class="item">
                            <div class="info-user">
                                <img src="{{ asset('images/' . $post->user->image) }}"
                                     alt="{{ $post->user->name }}">
                                <p class="username">{{ $post->user->name }}</p>
                            </div>

                            <div class="content">
                                <p>{{ $post->content }}</p>
                            </div>

                            <p class="text-sm text-gray-500">Publié le {{ $post->created_at->format('d/m/Y') }}</p>
                        </div>
                    @endforeach

                </div>
                <a href="/posts/create" class="btn btn-primary">Créer un post</a>
            </div>
        </div>
    </div>
</div>
@endsection
