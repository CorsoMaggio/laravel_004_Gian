<x-main>
    <x-slot name="Titolo">
        Books LIST
    </x-slot>
    <x-slot name="css">
        <style>
            .nav-link {
                color: white !important;
            }

            .navbar-brand {
                color: white !important;
            }

            .bg-dark {
                background-color: #343a40 !important;
            }

            .card {
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
            }
        </style>
    </x-slot>

    <div class="container mt-5">
        <h1 class="mb-4 text-center">Lista dei libri</h1>
        <div class="row">
            @foreach ($books as $book)
                <div class="col-md-4 mb-4">
                    <div class="card" style="background-color: #80808090">
                        <div class="card-body">
                            <p class="card-title"><strong>ID:</strong> {{ $book->id }}</p>
                            <p class="card-text"><strong>Nome del libro:</strong> {{ $book->name }}</p>
                            <p class="card-text"><strong>N. di pagine:</strong> {{ $book->pages }}</p>
                            <p class="card-text"><strong>Anno di uscita:</strong> {{ $book->year }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-main>
