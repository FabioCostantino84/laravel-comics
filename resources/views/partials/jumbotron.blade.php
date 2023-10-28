<div class="jumbotron">


    <div class="imgContainer"></div>

    <div class="j_btn_top">
        <a href="#" class="text-white text-uppercase text-decoration-none fs-4" role="button"
            data-bs-toggle="button">current series</a>
    </div>

    {{-- <div class="container text-center py-3">

            <div class="row row-cols-6">

                <seriesItem :image="card.thumb" :title="card.series" :cardsArray="cardsArray"
                    :cards="cardsArray.cards" v-for="(card, index) in cardsArray.cards"></seriesItem>


                <div class="j_btn m-auto">
                    <a href="#" class="text-white text-uppercase text-decoration-none" role="button"
                        data-bs-toggle="button">load more</a>
                </div>

            </div>
        </div> --}}


</div>

<style>
    .imgContainer{

        background-image: url({{ Vite::asset('resources/img/jumbotron.jpg') }});
    }
   
</style>
