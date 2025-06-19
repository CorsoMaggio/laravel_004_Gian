<x-main>
    <x-slot name="Titolo">
        Books LIST
    </x-slot>
    <h1>Lista dei libri</h1>
    <div class="container mt-5">
        <div class="row">
            @foreach ($books as $book)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text"><strong>ID:</strong> {{ $book->id }}</p>
                            <p class="card-title"><strong>Nome del libro:</strong> {{ $book->name }}</p>
                            <p class="card-text"><strong>N. di pagine:</strong> {{ $book->pages }}</p>
                            <p class="card-text"><strong>Anno di uscita:</strong> {{ $book->year }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-main>
