@extends('layout.app')

@section('content')
    <!-- Inizio: Contenitore principale del corpo -->
    <div class="container-fluid dc-mainContainer">

        <!-- Inizio: Riga di contenuto principale -->
        <div class="row justify-content-center">

            <!-- Inizio: Contenitore delle cards -->
            <div class="col-3 py-5 position-relative">

                <!-- Inizio: Riga di contenuto delle cards -->
                <div class="row">

                    <!-- Immagine della card -->
                    <img src="{{ $comic['thumb'] }}" alt="">

                    <!-- Titolo della card -->
                    <h2 class="text-light">{{ $comic['title'] }}</h2>

                </div>
                <!-- Fine: Riga di contenuto delle cards -->

            </div>
            <!-- Fine: Contenitore delle cards -->

        </div>
        <!-- Fine: Riga di contenuto principale -->

    </div>
    <!-- Fine: Contenitore principale del corpo -->
@endsection
