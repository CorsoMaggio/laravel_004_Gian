<x-main>
    <x-slot name="Titolo">
        Show specific Book
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
    <h1 class="text-center">{{ $book->name }}</h1>
    <p>Sei entrato nel libro " <strong>{{ $book->name }}</strong> ".</p>
    <p>Questo libro ha {{ $book->pages }} ed è stato pubblicato per la prima volta {{ $book->year }}.</p>
</x-main>
