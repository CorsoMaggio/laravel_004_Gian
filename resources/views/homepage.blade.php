<x-main>
    <x-slot name="Titolo">
        homepage
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
                margin-top: 20px;
            }
        </style>
    </x-slot>
    <section>
        <div class="container mt-5">
            <h1 class="mb-4 text-center">Homepage</h1>
            @guest
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-lg-12 col-xl-11">
                            <div class="card " style="border-radius: 25px;"
                                style="background-color: #80808090,margin-botton: 20 px">
                                <div class="card-body">
                                    <p class="text-center">
                                        Welcome in our homepage, where you can find all the books in our library.
                                    </p>
                                    <div style="display: flex; justify-content: center; gap: 10px;">
                                        <a href="{{ route('login') }}" type="button" class="btn btn-primary">Accedi</a> |
                                        <a href="{{ route('register') }}" type="button"
                                            class="btn btn-primary">Registrati</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container h-100">
                    <div class="card" style="margin-top: 20 px">
                        <div class="card-body">
                            @foreach ($books as $book)
                                <p class="card-text"><strong>Title:</strong> {{ $book->name }} </p>
                                <p class="card-title"><strong>Price:</strong>
                                    {{ $book->price ?? 'Indefined' }} </p>
                                <a href="{{ route('detail', ['book' => $book]) }}" class="btn btn-primary">Dettagli</a>
                                <hr>
                            @endforeach
                        </div>
                    </div>
                </div>
            @else
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-lg-12 col-xl-11">
                            <div class="card" style="border-radius: 25px;" style="background-color: #80808090 ">
                                <div class="card-body">
                                    <p class="text-center">
                                        Welcome in our homepage, where you can find all the books in our
                                        library and add
                                        them.
                                    </p>
                                    <div style="display: flex; justify-content: center; gap: 50px;">
                                        <a href="{{ route('create') }}" type="button" class="btn btn-primary">Add</a>
                                        or
                                        <a href="{{ route('index') }}" type="button" class="btn btn-primary">List</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endguest
        </div>
    </section>
</x-main>
