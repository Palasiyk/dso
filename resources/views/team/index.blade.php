@extends('layouts.app')

@section('content')

    <div class="row text-center mb-3">
        <h1 class="col team_list_name ">Гравці</h1>
        <a href="{{route('createPlayer')}}" class="col-3 align-middle btn btn-sm btn-outline-secondary">CREATE</a>
    </div>
    <div class="team_list row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 ">
    @foreach($team as $player)
        <div class="col">
            <div class="card shadow-sm">
                <div class="col" style="max-height: 550px">
                    <a href="{{ route('showPlayer', $player->id) }}">
                        <img class="bd-placeholder-img card-img-top" src="img/team/{{$player->image}}" alt="playerImg">
                    </a>
                </div>

                <div class="card rounded-3 shadow-sm">
                    <div class="card-header text-center py-3">
                        <a href="{{ route('showPlayer', $player->id) }}">
                            <h2 class="team_name my-0">{{$player->name}}</h2>
                        </a>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card_text card-title pricing-card-title">SHIRT NUMBER <span class="card_subtext fs-2 m-2">{{$player->namber}}</span></h5>
                        <h5 class="card_text card-title pricing-card-title">POSITION <span class="card_subtext fs-4 m-2">{{$player->position}}</span></h5>
                        <h5 class="card_text card-title pricing-card-title">SPORT NATIONALITY  <span class="card_subtext fs-4 m-2">{{$player->nacionality}}</span></h5>
                        <h5 class="card_text card-title pricing-card-title">BIRTH PLACE  <span class="card_subtext fs-4 m-2">{{$player->bith_place}}</span></h5>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li class="card_text">HEIGTH <span class="card_subtext">{{$player->height}}</span></li>
                            <li class="card_text">JUMP <span class="card_subtext">{{$player->jump}}</span></li>
                            <li class="card_text">DATE OF BIRTH <span class="card_subtext">{{$player->byrthday}}</span></li>
                        </ul>
{{--                        @can( 'view', auth()->user()->role )--}}
                            <div class="btn-group">
                                <a href="{{route('showPlayer', $player->id)}}" class="btn btn-sm btn-outline-secondary">View</a>
                                <a href="{{route('editPlayer', $player->id)}}" class="btn btn-sm btn-outline-secondary">UPDATE</a>
                                <form action="{{ route('deletePlayer', $player->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="DELETE" class="btn btn-sm btn-outline-secondary">
                                </form>
                            </div>
{{--                        @endcan--}}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
    <div class="row text-center mt-5 mb-4">
        <h1 class="col team_list_name ">Тренерський склад</h1>
    </div>
    <div class="team_list row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3 justify-content-around mb-3">
        <div class="col">
            <div class="card shadow-sm р">
                <div class="col" style="max-height: 420px; display: block">
                    <img class="bd-placeholder-img card-img-top" src="img/team/krav.jpeg" alt="coach">
                </div>
                <div class="card rounded-3 shadow-sm">
                    <div class="card-header text-center py-3">
                        <h2 class="team_name my-0">Кравцов Юрій Анатолійович</h2>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card_text card-title pricing-card-title">Головний тренер</h5>
                        <a href="#" target="_blank">
                            <img class="w-50" src="../img/logo/Instagram.png" alt="insta">
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm">
                <div class="col" style="max-height: 420px; display: block">
                    <img class="bd-placeholder-img card-img-top" src="img/team/osa.jpeg" alt="coach">
                </div>
                <div class="card rounded-3 shadow-sm">
                    <div class="card-header text-center py-3">
                        <h2 class="team_name my-0">Осадца Віталій Михайлович</h2>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card_text card-title pricing-card-title">Асистент тренера</h5>
                        <a href="https://www.instagram.com/vitaliyosadtsa/" target="_blank">
                            <img class="w-50" src="../img/logo/Instagram.png" alt="insta">
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm">
                <div class="col" style="max-height: 460px; display: block">
                    <img class="bd-placeholder-img card-img-top" src="img/team/nast.jpeg" alt="coach">
                </div>
                <div class="card rounded-3 shadow-sm">
                    <div class="card-header text-center py-3">
                        <h2 class="team_name my-0">Настюк Віталій</h2>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card_text card-title pricing-card-title">Статистик</h5>
                        <a href="https://www.instagram.com/vitaly_nastyuk/" target="_blank">
                            <img class="w-50" src="../img/logo/Instagram.png" alt="insta">
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm">
                <div class="col" style="max-height: 460px; display: block">
                    <img class="bd-placeholder-img card-img-top" src="img/team/mas.jpeg" alt="coach">
                </div>
                <div class="card rounded-3 shadow-sm">
                    <div class="card-header text-center py-3">
                        <h2 class="team_name my-0">Ганін Анастасія</h2>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card_text card-title pricing-card-title">Масажист</h5>
                        <a href="https://www.instagram.com/anastasiaganin1992/" target="_blank">
                            <img class="w-50" src="../img/logo/Instagram.png" alt="insta">
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
