<x-main>
    <x-slot name="Titolo">
        Nuovo Autore
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
        <h1 class="mb-4 text-center">Aggiungi un Nuovo Autore</h1>
        @if ($errors->any())
            <div class="alert alert-warning">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('autori.store') }}">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="firstname" class="form-label">Nome Autore</label>
                <input type="text" class="form-control" id="firstname" name="firstname"
                    placeholder="Inserisci il nome dell'autore" value="{{ old('firstname') }}">
                @error('firstname')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Cognome Autore</label>
                <input type="text" class="form-control" id="lastname" name="lastname"
                    placeholder="Inserisci il cognome dell'autore" value="{{ old('lastname') }}">
                @error('lastname')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label for="birthday" class="form-label">Data di Nascita</label>
                <input type="date" class="form-control" id="birthday" name="birthday" value="{{ old('birthday') }}">
                @error('birthday')
                    {{ $message }}
                @enderror
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" type="submit" style="margin-top: 20px;">Salva Autore</button>
            </div>
        </form>
    </div>
</x-main>
