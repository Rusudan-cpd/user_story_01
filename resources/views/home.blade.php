<x-layout>

    @if(session('message'))
        <div class="alert alert-success text-center">
            {{ session('message') }}
        </div>
    @endif

    <div class="container py-5">
        <h1 class="text-center">{{ __('ui.hello') }}</h1>
        <p class="text-center">{{ __('ui.allArticles') }}</p>

        <div class="row g-4 mt-4">
            @forelse ($articles as $article)
                <div class="col-md-4">
                    <x-card :article="$article" />
                </div>
            @empty
                <p class="text-center">Non ci sono ancora annunci.</p>
            @endforelse
        </div>
    </div>

</x-layout>