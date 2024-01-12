@extends('layout.app')

@section('content')
    <!-- Inizio: Contenitore principale del corpo -->
    <div class="container-fluid dc-mainContainer">

        <!-- Inizio: Riga di contenuto principale -->
        <div class="row justify-content-center">

            <!-- Inizio: Contenitore delle cards -->
            <div class="col-8 py-5 position-relative">

                <!-- Inizio: Badge della serie corrente -->
                <div class="py-2 px-4 position-absolute top-0 translate-middle dc-currentSeries">
                    <h5 class="text-uppercase m-0">Current Series</h5>
                </div>
                <!-- Fine: Badge della serie corrente -->

                <!-- Inizio: Riga delle cards -->
                <div class="row row-cols-6 g-3">

                    <!-- Includi il file parziale delle cards -->
                    @include('partials.cards')

                    <!-- Bottone "Load More" -->
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <a href="#" class="btn text-uppercase px-5 dc-more">Load More</a>
                    </div>

                </div>
                <!-- Fine: Riga delle cards -->

            </div>
            <!-- Fine: Contenitore delle cards -->

        </div>
        <!-- Fine: Riga di contenuto principale -->

    </div>
    <!-- Fine: Contenitore principale del corpo -->
@endsection
