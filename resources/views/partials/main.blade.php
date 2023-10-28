{{-- @extends('layouts.app') --}}

<section class="jumbotron">
    
    <div class="container text-center py-3">
    
        <div class="row row-cols-6">
    
            @foreach ($comics as $category => $list)
                <h1>{{$category}}</h1>
            @endforeach

            <div class="col">
                <div class="card-img">
                    <img class="p-3" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </div>
            </div>
    
            {{-- <div class="col">
                <div class="card-img">
                    <img class="p-3" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </div>
            </div>
    
            <div class="col">
                <div class="card-img">
                    <img class="p-3" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </div>
            </div>
    
            <div class="col">
                <div class="card-img">
                    <img class="p-3" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </div>
            </div>
    
            <div class="col">
                <div class="card-img">
                    <img class="p-3" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </div>
            </div>
    
            <div class="col">
                <div class="card-img">
                    <img class="p-3" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </div>
            </div>
    
            <div class="col">
                <div class="card-img">
                    <img class="p-3" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </div>
            </div>
    
            <div class="col">
                <div class="card-img">
                    <img class="p-3" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </div>
            </div>
    
            <div class="col">
                <div class="card-img">
                    <img class="p-3" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </div>
            </div>
    
            <div class="col">
                <div class="card-img">
                    <img class="p-3" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </div>
            </div>
    
            <div class="col">
                <div class="card-img">
                    <img class="p-3" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </div>
            </div>
    
            <div class="col">
                <div class="card-img">
                    <img class="p-3" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                </div>
            </div> --}}
    
        </div>
    
        {{-- button --}}
        <div class="j_btn m-auto">
            <a href="#" class="text-white text-uppercase text-decoration-none" role="button"
                data-bs-toggle="button">load more</a>
        </div>
    
    </div>

</section>

