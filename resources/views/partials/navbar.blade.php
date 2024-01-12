<div class="row justify-content-center">

    <!-- Inizio: Barra di navigazione -->
    <div class="col-10 p-0">

        <nav class="navbar navbar-expand-lg py-0">

            <!-- Logo della navbar -->
            <a class="navbar-brand flex-grow-1" href="#"><img
                    src="{{ Vite::asset('resources/img/dc-logo.png') }}"></a>

            <!-- Elementi della navbar -->
            <div class="navbar-nav d-flex justify-content-between text-uppercase">

                <!-- Loop attraverso i link nella navbar -->
                @foreach (config('navbar-links') as $link)
                    <a class="dc nav-link px-4 py-5 {{ Route::currentRouteName() === $link['path'] ? 'dc-active' : '' }}"
                        href="{{ Route($link['path']) }}">
                        {{ $link['text'] }}
                    </a>
                @endforeach

            </div>

            <!-- Icona di ricerca nella navbar -->
            <div class="col-1 d-flex justify-content-center align-items-center ">
                <div class="d-flex dc-searchContainer">
                    <input type="search" id="dc-search" class="form-control" placeholder="Cerca...">
                    <i class="fa fa-search align-self-center"></i>
                </div>
            </div>

        </nav>

    </div>
    <!-- Fine: Barra di navigazione -->

</div>
