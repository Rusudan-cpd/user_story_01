<div class="card card-w mx-auto">
    @if($article->images->isNotEmpty())
    <img
        src="{{ $article->images->first()->getUrl(300, 300) }}"
        class="card-img-top"
        alt="Immagine articolo"
        style="height: 200px; object-fit: cover;"
    >
@else
    <img
        src="https://picsum.photos/300"
        class="card-img-top"
        alt="Immagine segnaposto"
       style="width: 300px; height: 300px; object-fit: cover;"
    >
@endif
    <div class="card-body">
        <h5 class="card-title">{{ $article->title }}</h5>
        <p class="card-text">{{ $article->description }}</p>
        <p class="card-text">{{ $article->price }} €</p>
        <p class="card-text">{{ $article->category->name }}</p>

        <a href="{{ route('article.show', $article) }}" class="btn btn-info">
           Dettagli
       </a>  
    </div>
</div>