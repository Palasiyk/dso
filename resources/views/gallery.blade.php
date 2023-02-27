@extends('layouts.app')

@section('content')

    {{--    VIDEO--}}
    <div class="mb-16 me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
            <h2 class="display-5">Поліція охорони-ЗУНУ-Динамо - Барком-Збірна України U-18</h2>
            <p class="lead">05.02.2023 | Волейбол СУПЕРЛІГА-БУДІНВЕСТ</p>
        </div>
        <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 500px; border-radius: 21px; display: flex; justify-content: center">
            <iframe width="90%"src="https://www.youtube.com/embed/naFPQWAsxTU" title="YouTube video player"
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
            </iframe>
        </div>
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
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="10" aria-label="Slide 11" class="" aria-current="true"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="carousel_img" src="img/barcom/0.jpg" alt="yura">
            </div>
            <div class="carousel-item">
                <img class="carousel_img" src="img/barcom/1.jpg" alt="yura">
            </div>
            <div class="carousel-item">
                <img class="carousel_img" src="img/barcom/2.jpg" alt="yura">
            </div>
            <div class="carousel-item">
                <img class="carousel_img" src="img/barcom/3.jpg" alt="yura">
            </div>
            <div class="carousel-item">
                <img class="carousel_img" src="img/barcom/4.jpg" alt="yura">
            </div>
            <div class="carousel-item ">
                <img class="carousel_img" src="img/barcom/5.jpg" alt="yura">
            </div>
            <div class="carousel-item ">
                <img class="carousel_img" src="img/barcom/6.jpg" alt="yura">
            </div>
            <div class="carousel-item ">
                <img class="carousel_img" src="img/barcom/7.jpg" alt="yura">
            </div>
            <div class="carousel-item ">
                <img class="carousel_img" src="img/barcom/8.jpg" alt="yura">
            </div>
            <div class="carousel-item ">
                <img class="carousel_img" src="img/barcom/9.jpg" alt="yura">
            </div>
            <div class="carousel-item ">
                <img class="carousel_img" src="img/barcom/10.jpg" alt="yura">
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

@endsection
