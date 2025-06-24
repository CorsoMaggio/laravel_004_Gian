<x-main>
    <x-slot name="Titolo">
        New Books
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
        <h1 class="mb-4 text-center">Nuovi libri</h1>
        @if ($errors->any())
            <div class="alert alert-warning">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('store') }}">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="exampleFormInput3" class="form-label">Nome del libro</label>
                <input type="text" class="form-control" id="exampleFormInput3" name="name"
                    placeholder="Inserisci nome del libro">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormInput3" class="form-label">N. di pagine del libro</label>
                <input type="text" class="form-control" id="exampleFormInput3" name="pages"
                    placeholder="Inserisci numero di pagine"">
                @error('Pages')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormInput3" class="form-label">Anno di uscita</label>
                <input type="text" class="form-control" id="exampleFormInput3" name="year"
                    placeholder="Inserisci anno di uscita">
                @error('year')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label for="authorSelect" class="form-label">Autore del libro</label>
                <select class="form-control" id="authorSelect" name="author_id">
                    <option value="">Seleziona un autore</option>
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->firstname }} - {{ $author->lastname }}</option>
                    @endforeach
                </select>
                @error('author_id')
                    {{ $message }}
                @enderror
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" type="submit" style="margin-top: 20px;">Salva</button>
            </div>
        </form>
    </div>
</x-main>
