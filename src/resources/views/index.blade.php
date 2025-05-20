@include('header')

<section class="container">

    <div class="list-post">
        {{ $posts->links() }}

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

</section>
