<x-main>
    <x-slot name="Titolo">
        Modifica Libro
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
        </style>
    </x-slot>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Modifica il Libro: {{ $book->name }}</h1>
        @if ($errors->any())
            <div class="alert alert-warning">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('update', ['book' => $book->id]) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nome del libro</label>
                <input type="text" class="form-control" id="name" name="name"
                    value="{{ old('name', $book->name) }}" placeholder="Cambia il nome del libro">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label for="pages" class="form-label">N. di pagine del libro</label>
                <input type="text" class="form-control" id="pages" name="pages"
                    value="{{ old('pages', $book->pages) }}" placeholder="Cambia il numero di pagine">
                @error('pages')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Anno di uscita</label>
                <input type="text" class="form-control" id="year" name="year"
                    value="{{ old('year', $book->year) }}" placeholder="Cambia l' anno di uscita">
                @error('year')
                    {{ $message }}
                @enderror
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" type="submit" style="margin-top: 20px;">Aggiorna</button>
            </div>
        </form>
    </div>
</x-main>
