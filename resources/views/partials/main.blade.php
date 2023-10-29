{{-- @extends('layouts.app') --}}

<section class="jumbotron">

    <div class="container text-center py-3">

        <div class="row row-cols-2">

            @foreach ($books as $category => $list)
                <div class="col-2 g-4">
                    <div>
                        <img class="imgSeries" src={{ $list['thumb'] }} alt="...">
                        <h5 class="text-start">{{ $list['series'] }}</h5>
                    </div>
                </div>
            @endforeach

        </div>

        {{-- button --}}
        <div class="j_btn m-auto">
            <a href="#" class="text-white text-uppercase text-decoration-none" role="button"
                data-bs-toggle="button">load more</a>
        </div>

    </div>

</section>
