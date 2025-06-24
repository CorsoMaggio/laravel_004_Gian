<x-main>
    <x-slot name="Titolo">
        Autori LIST
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
        <h1 class="mb-4 text-center">Lista degli Autori</h1>

        <div class="d-flex justify-content-center mb-3">
            <a href="{{ route('autori.create') }}" class="btn btn-primary">Add Author</a>
        </div>
        <div class="row">
            @foreach ($authors as $author)
                <div class="col-md-4 mb-4">
                    <div class="card" style="background-color: #80808090">
                        <div class="card-body">
                            <p class="card-title"><strong>ID:</strong> {{ $author->id }} </p>
                            <p class="card-text"><strong>Nome:</strong> {{ $author->firstname }} </p>
                            <p class="card-text"><strong>Cognome:</strong> {{ $author->lastname }} </p>
                            <p class="card-text"><strong>Data di Nascita:</strong>
                                {{ $author->birthday ?? 'Indefined' }}</p>

                            <a href="{{ route('autori.show', ['author' => $author]) }}" class="btn btn-primary">Vedi
                                Dettagli</a>
                            <a href="{{ route('autori.edit', ['author' => $author]) }}"
                                class="btn btn-primary">Modifica</a>

                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteAuthorModal{{ $author->id }}">
                                Elimina
                            </button>

                            {{-- Modale di eliminazione --}}
                            <div class="modal fade" id="deleteAuthorModal{{ $author->id }}" tabindex="-1"
                                aria-labelledby="deleteAuthorModalLabel{{ $author->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteAuthorModalLabel{{ $author->id }}">
                                                Conferma Eliminazione</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Sei sicuro di voler eliminare l'autore <strong>"{{ $author->firstname }}
                                                {{ $author->lastname }}"</strong>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Annulla</button>
                                            <form method="POST"
                                                action="{{ route('autori.destroy', ['author' => $author->id]) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Elimina</button>
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
