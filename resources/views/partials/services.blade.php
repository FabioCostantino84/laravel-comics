<div class="container-fluid dc-menuCont">

    <!-- Inizio: Riga di contenuto principale -->
    <div class="row justify-content-center">

        <!-- Inizio: Colonna principale -->
        <div class="col-10 p-0">

            <!-- Inizio: Contenitore per elementi del menu -->
            <div class="d-flex align-items-center justify-content-evenly flex-wrap p-4 dcMenuEl">

                <!-- Loop attraverso i link dei servizi -->
                @foreach (config('services-links') as $link)
                    <a href="{{ $link['path'] }}" class="text-uppercase m-3">
                        <img src="{{ Vite::asset($link['img']) }}" alt="">
                        <span class="ms-4">{{ $link['text'] }}</span>
                    </a>
                @endforeach

            </div>
            <!-- Fine: Contenitore per elementi del menu -->

        </div>
        <!-- Fine: Colonna principale -->

    </div>
    <!-- Fine: Riga di contenuto principale -->

</div>
