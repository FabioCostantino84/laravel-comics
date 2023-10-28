<div class="container">
    <div class="row align-items-center">
        <div class="col-2">

            <!-- LOGO -->
            <img class="p-3" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">

        </div>
        <div class="col-7 d-flex justify-content-center">

            <!-- NAVBAR -->
            <nav class="navbar navbar-expand-sm ">

                <!-- CICLO NELL' ARRAY -->
                {{-- <div v-for="link in navLink" class="container-fluid">
                    <a class="nav-link active text-uppercase font-weight-bold align-content-center" aria-current="page"
                        href="#">{{ link }}</a> --}}

                <a class="navbar-brand" href="#">COMICS</a>
                <a class="navbar-brand" href="#">MOVIES</a>
                <a class="navbar-brand" href="#">TV</a>
                <a class="navbar-brand" href="#">GAMES</a>
                <a class="navbar-brand" href="#">COLLECTIBLES</a>
                <a class="navbar-brand" href="#">VIDEOS</a>
                <a class="navbar-brand" href="#">FANS</a>
                <a class="navbar-brand" href="#">NEWS</a>
                <a class="navbar-brand" href="#">SHOP</a>
            </nav>
        </div>

        <div class="col-3">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

        </div>

    </div>
</div>
