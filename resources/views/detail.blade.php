<x-main>
    <x-slot name="Titolo">
        Dettagli
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
        <div class="card" style="margin-top: 20 px">
            <div class="card-body">
                <p class="card-text"><strong>Title:</strong> {{ $book->name }} </p>
                <p class="card-title"><strong>Price:</strong>
                    {{ $book->price ?? 'Indefined' }} </p>
                <p class="card-title"><strong>N. of pages:</strong>
                    {{ $book->pages }} </p>
                <p class="card-title"><strong>First release:</strong>
                    {{ $book->year }} </p>
            </div>
        </div>
    </div>
</x-main>
