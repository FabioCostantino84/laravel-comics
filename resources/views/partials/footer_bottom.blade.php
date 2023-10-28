{{-- <?php

return [
    'brands' => [
        "name"=> "facebook",
        "logo"=> "resources/img/footer-facebook.png"
    ],
                [
        "name"=> "twitter",
        "logo"=> "resources/img/footer-twitter.png"
    ],
                [
        "name"=> "youtube",
        "logo"=> "resources/img/footer-youtube.png"
    ],
                [
        "name"=> "pinterest",
        "logo"=> "resources/img/footer-pinterest.png"
    ],
                [
        "name"=> "periscope",
        "logo"=> "resources/img/footer-periscope.png"
    ],
];

?> --}}

<footer>


    <div class="container w-75">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-between">
                <div class="f_btn">
                    <a href="#" class="text-white text-uppercase text-decoration-none" role="button"
                        data-bs-toggle="button">sing-up now!</a>
                </div>
    
                <div class="d-flex align-items-center p-5">
                    <div>
                        <h4>FOLLOW US</h4>
                    </div>

                    <div class="iconsBrands d-flex flex-wrap p-2 align-items-center">
                        <img src="{{Vite::asset('resources/img/footer-facebook.png')}}" alt="">
                    </div>

                    <div class="iconsBrands d-flex flex-wrap p-2 align-items-center">
                        <img src="{{Vite::asset('resources/img/footer-periscope.png')}}" alt="">
                    </div>

                    <div class="iconsBrands d-flex flex-wrap p-2 align-items-center">
                        <img src="{{Vite::asset('resources/img/footer-pinterest.png')}}" alt="">
                    </div>

                    <div class="iconsBrands d-flex flex-wrap p-2 align-items-center">
                        <img src="{{Vite::asset('resources/img/footer-twitter.png')}}" alt="">
                    </div>

                    <div class="iconsBrands d-flex flex-wrap p-2 align-items-center">
                        <img src="{{Vite::asset('resources/img/footer-youtube.png')}}" alt="">
                    </div>

                    {{--  @foreach ($brands as $brand)
     
                     <div class="iconsBrands d-flex flex-wrap p-2 align-items-center">
                         <img src="{{$brand ['logo']}}" alt="{{$brand ['name']}}">
                     </div>
                         
                     @endforeach --}}
    
                </div>
    
    
            </div>
    
        </div>
    </div>

</footer>

