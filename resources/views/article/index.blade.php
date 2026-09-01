<x-layout>

    <div class="container py-5">
        <h1 class="text-center mb-4">Tutti gli annunci</h1>

        <div class="row g-4">
            @forelse ($articles as $article)
                <div class="col-md-4">
                    <x-card :article="$article" />
                </div>
            @empty
                <p class="text-center">Non ci sono ancora annunci.</p>
            @endforelse
        </div>

        <div class="d-flex justify-content-center mt-5">
            {{ $articles->links() }}
        </div>
    </div>

</x-layout>