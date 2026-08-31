<div class="container py-5">
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card bg-dark text-white shadow mx-auto" style="max-width: 600px;">
        <div class="card-body p-4">
            <h2 class="text-center mb-4">Inserisci annuncio</h2>

            <form wire:submit="save">

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" id="title" wire:model="title" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea id="description" wire:model="description" class="form-control" rows="4"></textarea>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo (€)</label>
                    <input type="number" step="0.01" id="price" wire:model="price" class="form-control">
                </div>

                <div class="mb-4">
                    <label for="category_id" class="form-label">Categoria</label>
                    <select id="category_id" wire:model="category_id" class="form-select">
                        <option value="">Seleziona una categoria</option>

                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-info px-4">
                        Inserisci annuncio
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>