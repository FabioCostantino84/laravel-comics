@extends('layout.app')

@section('content')
    <!-- Inizio: Contenitore principale del corpo -->
    <div class="container-fluid dc-mainContainer">

        <!-- Inizio: Riga di contenuto principale -->
        <div class="row justify-content-center">

            <!-- Inizio: Colonna principale -->
            <div class="col-8 py-5 position-relative">

                <!-- Titolo dinamico della pagina corrente -->
                <h1>{{ Str::ucfirst(Route::currentRouteName()) }}</h1>

            </div>
            <!-- Fine: Colonna principale -->

        </div>
        <!-- Fine: Riga di contenuto principale -->

    </div>
    <!-- Fine: Contenitore principale del corpo -->
@endsection
