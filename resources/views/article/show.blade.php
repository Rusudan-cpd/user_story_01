<x-layout>

    <div class="container py-5">
        <div class="card mx-auto" style="max-width: 700px;">
            <div class="card-body">
                <h1 class="card-title">{{ $article->title }}</h1>
                <p class="card-text">{{ $article->description }}</p>
                <p class="card-text">{{ $article->price }} €</p>
                <p class="card-text">{{ $article->category->name }}</p>

                <div class="mt-4">
                    <div id="articleCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="bg-secondary text-white d-flex align-items-center justify-content-center"
                                     style="height: 300px;">
                                    Immagine segnaposto
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="bg-secondary text-white d-flex align-items-center justify-content-center"
                                     style="height: 300px;">
                                    Immagine segnaposto
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="bg-secondary text-white d-flex align-items-center justify-content-center"
                                     style="height: 300px;">
                                    Immagine segnaposto
                                </div>
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button"
                                data-bs-target="#articleCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>

                        <button class="carousel-control-next" type="button"
                                data-bs-target="#articleCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>