<x-main>
    <x-slot name="Titolo">
        Modifica Autore
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
        <h1 class="mb-4 text-center">Modifica Autore: {{ $author->firstname }} {{ $author->lastname }}</h1>
        @if ($errors->any())
            <div class="alert alert-warning">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('autori.update', ['author' => $author->id]) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="firstname" class="form-label">Nome Autore</label>
                <input type="text" class="form-control" id="firstname" name="firstname"
                    value="{{ old('firstname', $author->firstname) }}" placeholder="Cambia il nome dell'autore">
                @error('firstname')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Cognome Autore</label>
                <input type="text" class="form-control" id="lastname" name="lastname"
                    value="{{ old('lastname', $author->lastname) }}" placeholder="Cambia il cognome dell'autore">
                @error('lastname')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label for="birthday" class="form-label">Data di Nascita</label>
                <input type="date" class="form-control" id="birthday" name="birthday"
                    value="{{ old('birthday', $author->birthday ?? 'Indefined') }}">
                @error('birthday')
                    {{ $message }}
                @enderror
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" type="submit" style="margin-top: 20px;">Aggiorna Autore</button>
                <a href="{{ route('autori.show', ['author' => $author]) }}"
                    class="btn btn-secondary btn-lg mt-2">Annulla</a>
            </div>
        </form>
    </div>
</x-main>
