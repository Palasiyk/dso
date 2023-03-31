@extends('layouts.app')

@section('content')


    <div class="container home_first">
        <div class="row pb-5">
            <div class="col-12">
                <H1 class="text-center">Наступний матч</H1>
                <H3 class="text-center">3.04.20023 - 20:00</H3>
            </div>
            <div class="col-5 text-center">
                <img style="width: 200px" src="../resources/images/logo/pol.jpeg" alt="dso">
            </div>
            <div class="col-2 text-center">
                <img style="width: 200px" src="../resources/images/logo/vs.png" alt="vs">
            </div>
            <div class="col-5 text-center">
                <img style="width: 200px" src="../resources/images/logo/epic.jpeg" alt="prom">
            </div>
        </div>

        <div class="row">
            <H1 class="text-center">Попередній матч</H1>
            {{--    VIDEO--}}
            <div class="pb-3 mb-16 me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
                    <h3 class="display-5">ВК «Прометей» - «Поліція охорони-ЗУНУ-Динамо»</h3>
                    <p class="lead">09.03.2023 | Волейбол СУПЕРЛІГА-БУДІНВЕСТ</p>
                </div>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/vaS2LXlx_o0" title="YouTube video player"
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;
                             picture-in-picture; web-share" allowfullscreen>
                </iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/0gbzgy6orts" title="YouTube video player"
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;
                            picture-in-picture; web-share" allowfullscreen>
                </iframe>
            </div>

            {{--    CAROUSEL--}}
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5" aria-label="Slide 6" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="6" aria-label="Slide 7" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="7" aria-label="Slide 8" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="8" aria-label="Slide 9" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="9" aria-label="Slide 10" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="10" aria-label="Slide 10" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="11" aria-label="Slide 10" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="12" aria-label="Slide 10" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="13" aria-label="Slide 10" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="14" aria-label="Slide 10" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="15" aria-label="Slide 10" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="16" aria-label="Slide 10" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="17" aria-label="Slide 10" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="18" aria-label="Slide 10" class=""></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="19" aria-label="Slide 11" class="" aria-current="true"></button>
                </div>
                <div class="carousel-inner" style="height: 800px;">
                    <div class="carousel-item active">
                        <img class="carousel_img w-100" src="../resources/images/play-off%20Prometey/0.jpg" alt="yura">
                    </div>
                    <div class="carousel-item">
                        <img class="carousel_img w-100" src="../resources/images/play-off%20Prometey/1.jpg" alt="yura">
                    </div>
                    <div class="carousel-item">
                        <img class="carousel_img w-100" src="../resources/images/play-off%20Prometey/2.jpg" alt="yura">
                    </div>
                    <div class="carousel-item">
                        <img class="carousel_img w-100" src="../resources/images/play-off%20Prometey/3.jpg" alt="yura">
                    </div>
                    <div class="carousel-item">
                        <img class="carousel_img w-100" src="../resources/images/play-off%20Prometey/4.jpg" alt="yura">
                    </div>
                    <div class="carousel-item ">
                        <img class="carousel_img w-100" src="../resources/images/play-off%20Prometey/5.jpg" alt="yura">
                    </div>
                    <div class="carousel-item ">
                        <img class="carousel_img w-100" src="../resources/images/play-off%20Prometey/6.jpg" alt="yura">
                    </div>
                    <div class="carousel-item ">
                        <img class="carousel_img w-100" src="../resources/images/play-off%20Prometey/7.jpg" alt="yura">
                    </div>
                    <div class="carousel-item ">
                        <img class="carousel_img w-100" src="../resources/images/play-off%20Prometey/8.jpg" alt="yura">
                    </div>
                    <div class="carousel-item ">
                        <img class="carousel_img w-100" src="../resources/images/play-off%20Prometey/9.jpg" alt="yura">
                    </div>
                    <div class="carousel-item ">
                        <img class="carousel_img w-100" src="../resources/images/play-off%20Prometey/10.jpg" alt="yura">
                    </div>
                    <div class="carousel-item ">
                        <img class="carousel_img w-100" src="../resources/images/play-off%20Prometey/11.jpg" alt="yura">
                    </div>
                    <div class="carousel-item ">
                        <img class="carousel_img w-100" src="../resources/images/play-off%20Prometey/12.jpg" alt="yura">
                    </div>
                    <div class="carousel-item ">
                        <img class="carousel_img w-100" src="../resources/images/play-off%20Prometey/13.jpg" alt="yura">
                    </div>
                    <div class="carousel-item ">
                        <img class="carousel_img w-100" src="../resources/images/play-off%20Prometey/14.jpg" alt="yura">
                    </div>
                    <div class="carousel-item ">
                        <img class="carousel_img w-100" src="../resources/images/play-off%20Prometey/15.jpg" alt="yura">
                    </div>
                    <div class="carousel-item ">
                        <img class="carousel_img w-100" src="../resources/images/play-off%20Prometey/16.jpg" alt="yura">
                    </div>
                    <div class="carousel-item ">
                        <img class="carousel_img w-100" src="../resources/images/play-off%20Prometey/17.jpg" alt="yura">
                    </div>
                    <div class="carousel-item ">
                        <img class="carousel_img w-100" src="../resources/images/play-off%20Prometey/18.jpg" alt="yura">
                    </div>
                    <div class="carousel-item ">
                        <img class="carousel_img w-100" src="../resources/images/play-off%20Prometey/19.jpg" alt="yura">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
    </div>






@endsection
