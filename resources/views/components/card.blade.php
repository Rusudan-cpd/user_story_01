<div class="card card-w mx-auto">
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