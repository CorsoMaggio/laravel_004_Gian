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
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <h1 class="mb-4 text-center">Lista dei libri</h1>
        <div class="row">
            @foreach ($books as $book)
                <div class="col-md-4 mb-4">
                    <div class="card" style="background-color: #80808090">
                        <div class="card-body">
                            <p class="card-title"><strong>ID:</strong> {{ $book->id }} </p>
                            <p class="card-text"><strong>Nome del libro:</strong> {{ $book->name }} </p>
                            <p class="card-text"><strong>N. di pagine:</strong> {{ $book->pages }} </p>
                            <p class="card-text"><strong>Anno di uscita:</strong> {{ $book->year }}</p>
                            <a href="{{ route('show', ['book' => $book]) }}" class="btn btn-primary">Vedi Dettagli</a>
                            <a href="{{ route('edit', ['book' => $book]) }}" class="btn btn-primary">Modifica</a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#exampleModal{{ $book->id }}">
                                Elimina
                            </button>

                            <div class="modal fade" id="exampleModal{{ $book->id }}" tabindex="-1"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel{{ $book->id }}">
                                                Pop-up di eliminazione
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <em>Sei sicuro di voler eliminare
                                                <strong>"{{ $book->name }}"</strong>?</em>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No,
                                                chiudi</button>
                                            <form method="POST"
                                                action="{{ route('destroy', ['book' => $book->id]) }}">
                                                @csrf
                                                @method('DELETE')

                                                <button class="btn btn-danger" type="submit">Si, elimina</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-main>
