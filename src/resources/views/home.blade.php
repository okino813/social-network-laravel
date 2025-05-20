@extends('layouts.app')
@section('content')
<div class="container">
    <div class="dashboard row justify-content-center">
        <div class="div col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vos posts') }}</div>
                <div class="card-body">
                                        {{ $posts->links() }}

                    @foreach($posts as $post)
                        <div class="item">
                            <div class="post">
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

                            <div class="btns">
                                <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Modifier</a>
                                <form action="/posts/{{ $post->id }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a href="/posts/create" class="btn btn-primary">Créer un post</a>
            </div>
        </div>
    </div>
</div>
@endsection
