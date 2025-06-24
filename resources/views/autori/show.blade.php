<x-main>
    <x-slot name="Titolo">
        Dettagli Autore
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
                background-color: #80808090;
                color: white;
            }
        </style>
    </x-slot>
    <div class="container mt-5">
        <div class="card" style="margin-top: 20px">
            <div class="card-body">
                <h1 class="card-title text-center mb-4"><strong>{{ $author->firstname }} {{ $author->lastname }}</strong>
                </h1>
                <p class="card-text"><strong>ID Autore:</strong> {{ $author->id }} </p>
                <p class="card-text"><strong>Nome:</strong> {{ $author->firstname }} </p>
                <p class="card-text"><strong>Cognome:</strong> {{ $author->lastname }} </p>
                <p class="card-text"><strong>Data di Nascita:</strong>
                    {{ $author->birthday ?? 'Indefined' }} </p>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('autori.edit', ['author' => $author]) }}" class="btn btn-primary">Modifica
                        Autore</a>
                    <a href="{{ route('autori.index') }}" class="btn btn-secondary">Torna alla Lista</a>
                </div>
            </div>
        </div>
    </div>
</x-main>
