@foreach ($comics as $id => $comic)
    <div class="col-2">

        <div class="dc-card card bg-transparent">

            <a href="{{ route('comic_details', $id) }}">
                {{-- Passa l'ID come parametro nella route --}}
                <div class="p-1 dc-coverContainer" style="background-image: url({{ $comic['thumb'] }})">
                    {{-- Immagine di copertina del fumetto --}}
                </div>

                <div class="card-body p-0 pt-3">

                    <p class="card-title text-uppercase">{{ $comic['series'] }}</p>
                    {{-- Titolo del fumetto in maiuscolo --}}
                    <p class="card-text text-capitalize">{{ $comic['type'] }}, price: {{ $comic['price'] }}</p>
                    {{-- Tipo del fumetto in maiuscolo, prezzo --}}
                </div>
            </a>

        </div>

    </div>
@endforeach
