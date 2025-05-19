@include('header')

<section class="container">

    <form method="POST"  action="{{ route('posts.store') }}">
        @csrf
        <div class="mb-3">
            <label for="content" class="form-label">Contenu du post</label>
            <input type="text" class="form-control" id="content" name="content" placeholder="Entrez le contenu du post">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" id="image" name="image" placeholder="URL de l'image">
        </div>

        <div class="mb-3">
            <label for="tags" class="form-label">Tags</label>
            <input type="text" class="form-control" id="tags" name="tags" placeholder="Entrez des tags séparés par des virgules">
        </div>

        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>

</section>

