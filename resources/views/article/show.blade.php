<x-layout>

    <div class="container py-5">
        <div class="card mx-auto" style="max-width: 700px;">
            <div class="card-body">

                <h1 class="card-title">{{ $article->title }}</h1>

                <p class="card-text">
                    {{ $article->description }}
                </p>

                <p class="card-text">
                    {{ $article->price }} €
                </p>

                <p class="card-text">
                    {{ __("ui.{$article->category->name}") }}
                </p>

                <div class="mt-4">

                    @if($article->images->count() > 0)

                        <div id="articleCarousel"
                             class="carousel slide"
                             data-bs-ride="carousel">

                            <div class="carousel-inner">

                                @foreach($article->images as $key => $image)

                                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">

                                        <img
                                            src="{{ \Illuminate\Support\Facades\Storage::url($image->path) }}"
                                            class="d-block w-100 rounded"
                                            alt="{{ __('ui.imageArticle') }}"
                                            style="height: 300px; object-fit: cover;"
                                        >

                                    </div>

                                @endforeach

                            </div>

                            @if($article->images->count() > 1)

                                <button class="carousel-control-prev"
                                        type="button"
                                        data-bs-target="#articleCarousel"
                                        data-bs-slide="prev">

                                    <span class="carousel-control-prev-icon"></span>

                                </button>

                                <button class="carousel-control-next"
                                        type="button"
                                        data-bs-target="#articleCarousel"
                                        data-bs-slide="next">

                                    <span class="carousel-control-next-icon"></span>

                                </button>

                            @endif

                        </div>

                    @else

                        <div class="bg-secondary text-white d-flex align-items-center justify-content-center rounded"
                             style="height: 300px;">
                           {{ __('ui.imagePlaceholder') }}
                        </div>

                    @endif

                </div>

            </div>
        </div>
    </div>

</x-layout>