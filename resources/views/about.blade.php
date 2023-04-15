@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col mb-3">
            <div class="row text-center">
                <h2>Контакти</h2>
            </div>
            <div class="col-9">
                <div class="row">
                    <a href="tel:5551234567">
                        <span class="icon-phone">&#9743;</span> +38 (098) 552-66-36
                    </a>
                </div>
                <div class="row">
                    <a href="email: mailto:ruslan.staer@gmail.com">
                        <span class="icon-email"></span> mailto:ruslan.staer@gmail.com
                    </a>
                </div>
            </div>
        </div>
        <div class="row text-center m-3">
            <h3>Наші партнери</h3>
        </div>
        <div class="row justify-content-between align-items-center text-center p-3">
            <div class="col-4 about_logo">
                <img src="../../images/sponsor/UOSK_LOGO_mono-_1_.svg" alt="uosk">
            </div>
            <div class="col-4 about_logo">
                <img class="about_logo_get" src="../../images/sponsor/getFit.svg" alt="get">
            </div>
            <div class="col-4 about_logo">
                <img src="../../images/sponsor/logo-pol-01.png" alt="pol">
            </div>

        </div>
    </div>


@endsection
