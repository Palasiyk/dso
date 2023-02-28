@extends('layouts.app')

@section('content')

    <h2 class="team_list_name">Player</h2>
{{--        @if(Route::has('login');--}}
            <a href="{{route('createPlayer')}}" class="btn btn-sm btn-outline-secondary">CREATE</a>
{{--        @endif--}}
    <div class="team_list row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 ">
    @foreach($team as $player)
        <div class="col">
            <div class="card shadow-sm">
                <a href="{{ route('showPlayer', $player->id) }}">
                    <img class="bd-placeholder-img card-img-top" style="max-height: 600px" src="img/team/{{$player->image}}" alt="omelchenko">
                </a>

                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <a href="{{ route('showPlayer', $player->id) }}">
                                <h4 class="team_name my-0">{{$player->name}}</h4>
                            </a>
                        </div>
                        <div class="card-body">
                            <h2 class="card_text card-title pricing-card-title">SHIRT NUMBER <span class="card_subtext">{{$player->namber}}</span></h2>
                            <h2 class="card_text card-title pricing-card-title">POSITION <span class="card_subtext">{{$player->position}}</span></h2>
                            <h2 class="card_text card-title pricing-card-title">SPORT NATIONALITY  <span class="card_subtext">{{$player->nacionality}}</span></h2>
                            <h2 class="card_text card-title pricing-card-title">BIRTH PLACE  <span class="card_subtext">{{$player->bith_place}}</span></h2>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li class="card_text">HEIGTH <span class="card_subtext">{{$player->height}}</span></li>
                                <li class="card_text">JUMP <span class="card_subtext">{{$player->jump}}</span></li>
                                <li class="card_text">DATE OF BIRTH <span class="card_subtext">{{$player->byrthday}}</span></li>
                            </ul>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{route('showPlayer', $player->id)}}" class="btn btn-sm btn-outline-secondary">View</a>
                                    <a href="{{route('editPlayer', $player->id)}}" class="btn btn-sm btn-outline-secondary">UPDATE</a>
                                    <form action="{{ route('deletePlayer', $player->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="DELETE" class="btn btn-sm btn-outline-secondary">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
{{--        <div class="col">--}}
{{--            <div class="card shadow-sm">--}}
{{--                <img class="team_img bd-placeholder-img card-img-top" src="img/team/3.jpeg" alt="omelchenko">--}}

{{--                <div class="col">--}}
{{--                    <div class="card mb-4 rounded-3 shadow-sm">--}}
{{--                        <div class="card-header py-3">--}}
{{--                            <h4 class="team_name my-0">Omelchenko Artem</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SHIRT NUMBER <span class="card_subtext">2</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">POSITION <span class="card_subtext">MIDDLE-BLOCKER</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SPORT NATIONALITY  <span class="card_subtext">UKR</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">BIRTH PLACE  <span class="card_subtext">М. ЛЯНТОР (РОСІЙСЬКА ФЕДЕРАЦІЯ)  (УКРАЇНА)</span></h2>--}}
{{--                            <ul class="list-unstyled mt-3 mb-4">--}}
{{--                                <li class="card_text">HEIGTH <span class="card_subtext">202</span></li>--}}
{{--                                <li class="card_text">REACH <span class="card_subtext">320</span></li>--}}
{{--                                <li class="card_text">JUMP <span class="card_subtext">340</span></li>--}}
{{--                                <li class="card_text">DATE OF BIRTH <span class="card_subtext">18/06/1997</span></li>--}}
{{--                            </ul>--}}
{{--                            <div class="d-flex justify-content-between align-items-center">--}}
{{--                                <div class="btn-group">--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col">--}}
{{--            <div class="card shadow-sm">--}}
{{--                <img class="team_img bd-placeholder-img card-img-top" src="img/team/5.jpeg" alt="omelchenko">--}}

{{--                <div class="col">--}}
{{--                    <div class="card mb-4 rounded-3 shadow-sm">--}}
{{--                        <div class="card-header py-3">--}}
{{--                            <h4 class="team_name my-0">Omelchenko Artem</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SHIRT NUMBER <span class="card_subtext">2</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">POSITION <span class="card_subtext">MIDDLE-BLOCKER</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SPORT NATIONALITY  <span class="card_subtext">UKR</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">BIRTH PLACE  <span class="card_subtext">М. ЛЯНТОР (РОСІЙСЬКА ФЕДЕРАЦІЯ)  (УКРАЇНА)</span></h2>--}}
{{--                            <ul class="list-unstyled mt-3 mb-4">--}}
{{--                                <li class="card_text">HEIGTH <span class="card_subtext">202</span></li>--}}
{{--                                <li class="card_text">REACH <span class="card_subtext">320</span></li>--}}
{{--                                <li class="card_text">JUMP <span class="card_subtext">340</span></li>--}}
{{--                                <li class="card_text">DATE OF BIRTH <span class="card_subtext">18/06/1997</span></li>--}}
{{--                            </ul>--}}
{{--                            <div class="d-flex justify-content-between align-items-center">--}}
{{--                                <div class="btn-group">--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col">--}}
{{--            <div class="card shadow-sm">--}}
{{--                <img class="team_img bd-placeholder-img card-img-top" src="img/team/6.jpeg" alt="omelchenko">--}}

{{--                <div class="col">--}}
{{--                    <div class="card mb-4 rounded-3 shadow-sm">--}}
{{--                        <div class="card-header py-3">--}}
{{--                            <h4 class="team_name my-0">Omelchenko Artem</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SHIRT NUMBER <span class="card_subtext">2</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">POSITION <span class="card_subtext">MIDDLE-BLOCKER</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SPORT NATIONALITY  <span class="card_subtext">UKR</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">BIRTH PLACE  <span class="card_subtext">М. ЛЯНТОР (РОСІЙСЬКА ФЕДЕРАЦІЯ)  (УКРАЇНА)</span></h2>--}}
{{--                            <ul class="list-unstyled mt-3 mb-4">--}}
{{--                                <li class="card_text">HEIGTH <span class="card_subtext">202</span></li>--}}
{{--                                <li class="card_text">REACH <span class="card_subtext">320</span></li>--}}
{{--                                <li class="card_text">JUMP <span class="card_subtext">340</span></li>--}}
{{--                                <li class="card_text">DATE OF BIRTH <span class="card_subtext">18/06/1997</span></li>--}}
{{--                            </ul>--}}
{{--                            <div class="d-flex justify-content-between align-items-center">--}}
{{--                                <div class="btn-group">--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col">--}}
{{--            <div class="card shadow-sm">--}}
{{--                <img class="team_img bd-placeholder-img card-img-top" src="img/team/7.jpeg" alt="omelchenko">--}}

{{--                <div class="col">--}}
{{--                    <div class="card mb-4 rounded-3 shadow-sm">--}}
{{--                        <div class="card-header py-3">--}}
{{--                            <h4 class="team_name my-0">Omelchenko Artem</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SHIRT NUMBER <span class="card_subtext">2</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">POSITION <span class="card_subtext">MIDDLE-BLOCKER</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SPORT NATIONALITY  <span class="card_subtext">UKR</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">BIRTH PLACE  <span class="card_subtext">М. ЛЯНТОР (РОСІЙСЬКА ФЕДЕРАЦІЯ)  (УКРАЇНА)</span></h2>--}}
{{--                            <ul class="list-unstyled mt-3 mb-4">--}}
{{--                                <li class="card_text">HEIGTH <span class="card_subtext">202</span></li>--}}
{{--                                <li class="card_text">REACH <span class="card_subtext">320</span></li>--}}
{{--                                <li class="card_text">JUMP <span class="card_subtext">340</span></li>--}}
{{--                                <li class="card_text">DATE OF BIRTH <span class="card_subtext">18/06/1997</span></li>--}}
{{--                            </ul>--}}
{{--                            <div class="d-flex justify-content-between align-items-center">--}}
{{--                                <div class="btn-group">--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col">--}}
{{--            <div class="card shadow-sm">--}}
{{--                <img class="team_img bd-placeholder-img card-img-top" src="img/team/8.jpeg" alt="omelchenko">--}}

{{--                <div class="col">--}}
{{--                    <div class="card mb-4 rounded-3 shadow-sm">--}}
{{--                        <div class="card-header py-3">--}}
{{--                            <h4 class="team_name my-0">Omelchenko Artem</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SHIRT NUMBER <span class="card_subtext">2</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">POSITION <span class="card_subtext">MIDDLE-BLOCKER</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SPORT NATIONALITY  <span class="card_subtext">UKR</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">BIRTH PLACE  <span class="card_subtext">М. ЛЯНТОР (РОСІЙСЬКА ФЕДЕРАЦІЯ)  (УКРАЇНА)</span></h2>--}}
{{--                            <ul class="list-unstyled mt-3 mb-4">--}}
{{--                                <li class="card_text">HEIGTH <span class="card_subtext">202</span></li>--}}
{{--                                <li class="card_text">REACH <span class="card_subtext">320</span></li>--}}
{{--                                <li class="card_text">JUMP <span class="card_subtext">340</span></li>--}}
{{--                                <li class="card_text">DATE OF BIRTH <span class="card_subtext">18/06/1997</span></li>--}}
{{--                            </ul>--}}
{{--                            <div class="d-flex justify-content-between align-items-center">--}}
{{--                                <div class="btn-group">--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col">--}}
{{--            <div class="card shadow-sm">--}}
{{--                <img class="team_img bd-placeholder-img card-img-top" src="img/team/9.jpeg" alt="omelchenko">--}}

{{--                <div class="col">--}}
{{--                    <div class="card mb-4 rounded-3 shadow-sm">--}}
{{--                        <div class="card-header py-3">--}}
{{--                            <h4 class="team_name my-0">Omelchenko Artem</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SHIRT NUMBER <span class="card_subtext">2</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">POSITION <span class="card_subtext">MIDDLE-BLOCKER</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SPORT NATIONALITY  <span class="card_subtext">UKR</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">BIRTH PLACE  <span class="card_subtext">М. ЛЯНТОР (РОСІЙСЬКА ФЕДЕРАЦІЯ)  (УКРАЇНА)</span></h2>--}}
{{--                            <ul class="list-unstyled mt-3 mb-4">--}}
{{--                                <li class="card_text">HEIGTH <span class="card_subtext">202</span></li>--}}
{{--                                <li class="card_text">REACH <span class="card_subtext">320</span></li>--}}
{{--                                <li class="card_text">JUMP <span class="card_subtext">340</span></li>--}}
{{--                                <li class="card_text">DATE OF BIRTH <span class="card_subtext">18/06/1997</span></li>--}}
{{--                            </ul>--}}
{{--                            <div class="d-flex justify-content-between align-items-center">--}}
{{--                                <div class="btn-group">--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col">--}}
{{--            <div class="card shadow-sm">--}}
{{--                <img class="team_img bd-placeholder-img card-img-top" src="img/team/10.jpeg" alt="omelchenko">--}}

{{--                <div class="col">--}}
{{--                    <div class="card mb-4 rounded-3 shadow-sm">--}}
{{--                        <div class="card-header py-3">--}}
{{--                            <h4 class="team_name my-0">Omelchenko Artem</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SHIRT NUMBER <span class="card_subtext">2</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">POSITION <span class="card_subtext">MIDDLE-BLOCKER</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SPORT NATIONALITY  <span class="card_subtext">UKR</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">BIRTH PLACE  <span class="card_subtext">М. ЛЯНТОР (РОСІЙСЬКА ФЕДЕРАЦІЯ)  (УКРАЇНА)</span></h2>--}}
{{--                            <ul class="list-unstyled mt-3 mb-4">--}}
{{--                                <li class="card_text">HEIGTH <span class="card_subtext">202</span></li>--}}
{{--                                <li class="card_text">REACH <span class="card_subtext">320</span></li>--}}
{{--                                <li class="card_text">JUMP <span class="card_subtext">340</span></li>--}}
{{--                                <li class="card_text">DATE OF BIRTH <span class="card_subtext">18/06/1997</span></li>--}}
{{--                            </ul>--}}
{{--                            <div class="d-flex justify-content-between align-items-center">--}}
{{--                                <div class="btn-group">--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col">--}}
{{--            <div class="card shadow-sm">--}}
{{--                <img class="team_img bd-placeholder-img card-img-top" src="img/team/11.jpeg" alt="omelchenko">--}}

{{--                <div class="col">--}}
{{--                    <div class="card mb-4 rounded-3 shadow-sm">--}}
{{--                        <div class="card-header py-3">--}}
{{--                            <h4 class="team_name my-0">Omelchenko Artem</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SHIRT NUMBER <span class="card_subtext">2</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">POSITION <span class="card_subtext">MIDDLE-BLOCKER</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SPORT NATIONALITY  <span class="card_subtext">UKR</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">BIRTH PLACE  <span class="card_subtext">М. ЛЯНТОР (РОСІЙСЬКА ФЕДЕРАЦІЯ)  (УКРАЇНА)</span></h2>--}}
{{--                            <ul class="list-unstyled mt-3 mb-4">--}}
{{--                                <li class="card_text">HEIGTH <span class="card_subtext">202</span></li>--}}
{{--                                <li class="card_text">REACH <span class="card_subtext">320</span></li>--}}
{{--                                <li class="card_text">JUMP <span class="card_subtext">340</span></li>--}}
{{--                                <li class="card_text">DATE OF BIRTH <span class="card_subtext">18/06/1997</span></li>--}}
{{--                            </ul>--}}
{{--                            <div class="d-flex justify-content-between align-items-center">--}}
{{--                                <div class="btn-group">--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col">--}}
{{--            <div class="card shadow-sm">--}}
{{--                <img class="team_img bd-placeholder-img card-img-top" src="img/team/13.jpeg" alt="omelchenko">--}}

{{--                <div class="col">--}}
{{--                    <div class="card mb-4 rounded-3 shadow-sm">--}}
{{--                        <div class="card-header py-3">--}}
{{--                            <h4 class="team_name my-0">Omelchenko Artem</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SHIRT NUMBER <span class="card_subtext">2</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">POSITION <span class="card_subtext">MIDDLE-BLOCKER</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SPORT NATIONALITY  <span class="card_subtext">UKR</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">BIRTH PLACE  <span class="card_subtext">М. ЛЯНТОР (РОСІЙСЬКА ФЕДЕРАЦІЯ)  (УКРАЇНА)</span></h2>--}}
{{--                            <ul class="list-unstyled mt-3 mb-4">--}}
{{--                                <li class="card_text">HEIGTH <span class="card_subtext">202</span></li>--}}
{{--                                <li class="card_text">REACH <span class="card_subtext">320</span></li>--}}
{{--                                <li class="card_text">JUMP <span class="card_subtext">340</span></li>--}}
{{--                                <li class="card_text">DATE OF BIRTH <span class="card_subtext">18/06/1997</span></li>--}}
{{--                            </ul>--}}
{{--                            <div class="d-flex justify-content-between align-items-center">--}}
{{--                                <div class="btn-group">--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col">--}}
{{--            <div class="card shadow-sm">--}}
{{--                <img class="team_img bd-placeholder-img card-img-top" src="img/team/16.jpeg" alt="omelchenko">--}}

{{--                <div class="col">--}}
{{--                    <div class="card mb-4 rounded-3 shadow-sm">--}}
{{--                        <div class="card-header py-3">--}}
{{--                            <h4 class="team_name my-0">Omelchenko Artem</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SHIRT NUMBER <span class="card_subtext">2</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">POSITION <span class="card_subtext">MIDDLE-BLOCKER</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SPORT NATIONALITY  <span class="card_subtext">UKR</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">BIRTH PLACE  <span class="card_subtext">М. ЛЯНТОР (РОСІЙСЬКА ФЕДЕРАЦІЯ)  (УКРАЇНА)</span></h2>--}}
{{--                            <ul class="list-unstyled mt-3 mb-4">--}}
{{--                                <li class="card_text">HEIGTH <span class="card_subtext">202</span></li>--}}
{{--                                <li class="card_text">REACH <span class="card_subtext">320</span></li>--}}
{{--                                <li class="card_text">JUMP <span class="card_subtext">340</span></li>--}}
{{--                                <li class="card_text">DATE OF BIRTH <span class="card_subtext">18/06/1997</span></li>--}}
{{--                            </ul>--}}
{{--                            <div class="d-flex justify-content-between align-items-center">--}}
{{--                                <div class="btn-group">--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col">--}}
{{--            <div class="card shadow-sm">--}}
{{--                <img class="team_img bd-placeholder-img card-img-top" src="img/team/17.jpeg" alt="omelchenko">--}}

{{--                <div class="col">--}}
{{--                    <div class="card mb-4 rounded-3 shadow-sm">--}}
{{--                        <div class="card-header py-3">--}}
{{--                            <h4 class="team_name my-0">Omelchenko Artem</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SHIRT NUMBER <span class="card_subtext">2</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">POSITION <span class="card_subtext">MIDDLE-BLOCKER</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SPORT NATIONALITY  <span class="card_subtext">UKR</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">BIRTH PLACE  <span class="card_subtext">М. ЛЯНТОР (РОСІЙСЬКА ФЕДЕРАЦІЯ)  (УКРАЇНА)</span></h2>--}}
{{--                            <ul class="list-unstyled mt-3 mb-4">--}}
{{--                                <li class="card_text">HEIGTH <span class="card_subtext">202</span></li>--}}
{{--                                <li class="card_text">REACH <span class="card_subtext">320</span></li>--}}
{{--                                <li class="card_text">JUMP <span class="card_subtext">340</span></li>--}}
{{--                                <li class="card_text">DATE OF BIRTH <span class="card_subtext">18/06/1997</span></li>--}}
{{--                            </ul>--}}
{{--                            <div class="d-flex justify-content-between align-items-center">--}}
{{--                                <div class="btn-group">--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col">--}}
{{--            <div class="card shadow-sm">--}}
{{--                <img class="team_img bd-placeholder-img card-img-top" src="img/team/18.jpeg" alt="omelchenko">--}}

{{--                <div class="col">--}}
{{--                    <div class="card mb-4 rounded-3 shadow-sm">--}}
{{--                        <div class="card-header py-3">--}}
{{--                            <h4 class="team_name my-0">Omelchenko Artem</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SHIRT NUMBER <span class="card_subtext">2</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">POSITION <span class="card_subtext">MIDDLE-BLOCKER</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SPORT NATIONALITY  <span class="card_subtext">UKR</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">BIRTH PLACE  <span class="card_subtext">М. ЛЯНТОР (РОСІЙСЬКА ФЕДЕРАЦІЯ)  (УКРАЇНА)</span></h2>--}}
{{--                            <ul class="list-unstyled mt-3 mb-4">--}}
{{--                                <li class="card_text">HEIGTH <span class="card_subtext">202</span></li>--}}
{{--                                <li class="card_text">REACH <span class="card_subtext">320</span></li>--}}
{{--                                <li class="card_text">JUMP <span class="card_subtext">340</span></li>--}}
{{--                                <li class="card_text">DATE OF BIRTH <span class="card_subtext">18/06/1997</span></li>--}}
{{--                            </ul>--}}
{{--                            <div class="d-flex justify-content-between align-items-center">--}}
{{--                                <div class="btn-group">--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col">--}}
{{--            <div class="card shadow-sm">--}}
{{--                <img class="team_img bd-placeholder-img card-img-top" src="img/team/20.jpeg" alt="omelchenko">--}}

{{--                <div class="col">--}}
{{--                    <div class="card mb-4 rounded-3 shadow-sm">--}}
{{--                        <div class="card-header py-3">--}}
{{--                            <h4 class="team_name my-0">Omelchenko Artem</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SHIRT NUMBER <span class="card_subtext">2</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">POSITION <span class="card_subtext">MIDDLE-BLOCKER</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SPORT NATIONALITY  <span class="card_subtext">UKR</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">BIRTH PLACE  <span class="card_subtext">М. ЛЯНТОР (РОСІЙСЬКА ФЕДЕРАЦІЯ)  (УКРАЇНА)</span></h2>--}}
{{--                            <ul class="list-unstyled mt-3 mb-4">--}}
{{--                                <li class="card_text">HEIGTH <span class="card_subtext">202</span></li>--}}
{{--                                <li class="card_text">REACH <span class="card_subtext">320</span></li>--}}
{{--                                <li class="card_text">JUMP <span class="card_subtext">340</span></li>--}}
{{--                                <li class="card_text">DATE OF BIRTH <span class="card_subtext">18/06/1997</span></li>--}}
{{--                            </ul>--}}
{{--                            <div class="d-flex justify-content-between align-items-center">--}}
{{--                                <div class="btn-group">--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--        <h2 class="team_list_name">COACH</h2>--}}
{{--    <div class="team_list row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 ">--}}
{{--        <div class="col">--}}
{{--            <div class="card shadow-sm">--}}
{{--                <img class="team_img bd-placeholder-img card-img-top" src="img/team/krav.jpeg" alt="omelchenko">--}}

{{--                <div class="col">--}}
{{--                    <div class="card mb-4 rounded-3 shadow-sm">--}}
{{--                        <div class="card-header py-3">--}}
{{--                            <h4 class="team_name my-0">Omelchenko Artem</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SHIRT NUMBER <span class="card_subtext">2</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">POSITION <span class="card_subtext">MIDDLE-BLOCKER</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SPORT NATIONALITY  <span class="card_subtext">UKR</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">BIRTH PLACE  <span class="card_subtext">М. ЛЯНТОР (РОСІЙСЬКА ФЕДЕРАЦІЯ)  (УКРАЇНА)</span></h2>--}}
{{--                            <ul class="list-unstyled mt-3 mb-4">--}}
{{--                                <li class="card_text">HEIGTH <span class="card_subtext">202</span></li>--}}
{{--                                <li class="card_text">REACH <span class="card_subtext">320</span></li>--}}
{{--                                <li class="card_text">JUMP <span class="card_subtext">340</span></li>--}}
{{--                                <li class="card_text">DATE OF BIRTH <span class="card_subtext">18/06/1997</span></li>--}}
{{--                            </ul>--}}
{{--                            <div class="d-flex justify-content-between align-items-center">--}}
{{--                                <div class="btn-group">--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col">--}}
{{--            <div class="card shadow-sm">--}}
{{--                <img class="team_img bd-placeholder-img card-img-top" src="img/team/osa.jpeg" alt="omelchenko">--}}

{{--                <div class="col">--}}
{{--                    <div class="card mb-4 rounded-3 shadow-sm">--}}
{{--                        <div class="card-header py-3">--}}
{{--                            <h4 class="team_name my-0">Omelchenko Artem</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SHIRT NUMBER <span class="card_subtext">2</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">POSITION <span class="card_subtext">MIDDLE-BLOCKER</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SPORT NATIONALITY  <span class="card_subtext">UKR</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">BIRTH PLACE  <span class="card_subtext">М. ЛЯНТОР (РОСІЙСЬКА ФЕДЕРАЦІЯ)  (УКРАЇНА)</span></h2>--}}
{{--                            <ul class="list-unstyled mt-3 mb-4">--}}
{{--                                <li class="card_text">HEIGTH <span class="card_subtext">202</span></li>--}}
{{--                                <li class="card_text">REACH <span class="card_subtext">320</span></li>--}}
{{--                                <li class="card_text">JUMP <span class="card_subtext">340</span></li>--}}
{{--                                <li class="card_text">DATE OF BIRTH <span class="card_subtext">18/06/1997</span></li>--}}
{{--                            </ul>--}}
{{--                            <div class="d-flex justify-content-between align-items-center">--}}
{{--                                <div class="btn-group">--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col">--}}
{{--            <div class="card shadow-sm">--}}
{{--                <img class="team_img bd-placeholder-img card-img-top" src="img/team/9.jpeg" alt="omelchenko">--}}

{{--                <div class="col">--}}
{{--                    <div class="card mb-4 rounded-3 shadow-sm">--}}
{{--                        <div class="card-header py-3">--}}
{{--                            <h4 class="team_name my-0">Omelchenko Artem</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SHIRT NUMBER <span class="card_subtext">2</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">POSITION <span class="card_subtext">MIDDLE-BLOCKER</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SPORT NATIONALITY  <span class="card_subtext">UKR</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">BIRTH PLACE  <span class="card_subtext">М. ЛЯНТОР (РОСІЙСЬКА ФЕДЕРАЦІЯ)  (УКРАЇНА)</span></h2>--}}
{{--                            <ul class="list-unstyled mt-3 mb-4">--}}
{{--                                <li class="card_text">HEIGTH <span class="card_subtext">202</span></li>--}}
{{--                                <li class="card_text">REACH <span class="card_subtext">320</span></li>--}}
{{--                                <li class="card_text">JUMP <span class="card_subtext">340</span></li>--}}
{{--                                <li class="card_text">DATE OF BIRTH <span class="card_subtext">18/06/1997</span></li>--}}
{{--                            </ul>--}}
{{--                            <div class="d-flex justify-content-between align-items-center">--}}
{{--                                <div class="btn-group">--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <h2 class="team_list_name">STUFF</h2>--}}
{{--    <div class="team_list row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 ">--}}
{{--        <div class="col">--}}
{{--            <div class="card shadow-sm">--}}
{{--                <img class="team_img bd-placeholder-img card-img-top" src="img/team/mas.jpeg" alt="omelchenko">--}}

{{--                <div class="col">--}}
{{--                    <div class="card mb-4 rounded-3 shadow-sm">--}}
{{--                        <div class="card-header py-3">--}}
{{--                            <h4 class="team_name my-0">Omelchenko Artem</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SHIRT NUMBER <span class="card_subtext">2</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">POSITION <span class="card_subtext">MIDDLE-BLOCKER</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SPORT NATIONALITY  <span class="card_subtext">UKR</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">BIRTH PLACE  <span class="card_subtext">М. ЛЯНТОР (РОСІЙСЬКА ФЕДЕРАЦІЯ)  (УКРАЇНА)</span></h2>--}}
{{--                            <ul class="list-unstyled mt-3 mb-4">--}}
{{--                                <li class="card_text">HEIGTH <span class="card_subtext">202</span></li>--}}
{{--                                <li class="card_text">REACH <span class="card_subtext">320</span></li>--}}
{{--                                <li class="card_text">JUMP <span class="card_subtext">340</span></li>--}}
{{--                                <li class="card_text">DATE OF BIRTH <span class="card_subtext">18/06/1997</span></li>--}}
{{--                            </ul>--}}
{{--                            <div class="d-flex justify-content-between align-items-center">--}}
{{--                                <div class="btn-group">--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col">--}}
{{--            <div class="card shadow-sm">--}}
{{--                <img class="team_img bd-placeholder-img card-img-top" src="img/team/nast.jpeg" alt="omelchenko">--}}

{{--                <div class="col">--}}
{{--                    <div class="card mb-4 rounded-3 shadow-sm">--}}
{{--                        <div class="card-header py-3">--}}
{{--                            <h4 class="team_name my-0">Omelchenko Artem</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SHIRT NUMBER <span class="card_subtext">2</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">POSITION <span class="card_subtext">MIDDLE-BLOCKER</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">SPORT NATIONALITY  <span class="card_subtext">UKR</span></h2>--}}
{{--                            <h2 class="card_text card-title pricing-card-title">BIRTH PLACE  <span class="card_subtext">М. ЛЯНТОР (РОСІЙСЬКА ФЕДЕРАЦІЯ)  (УКРАЇНА)</span></h2>--}}
{{--                            <ul class="list-unstyled mt-3 mb-4">--}}
{{--                                <li class="card_text">HEIGTH <span class="card_subtext">202</span></li>--}}
{{--                                <li class="card_text">REACH <span class="card_subtext">320</span></li>--}}
{{--                                <li class="card_text">JUMP <span class="card_subtext">340</span></li>--}}
{{--                                <li class="card_text">DATE OF BIRTH <span class="card_subtext">18/06/1997</span></li>--}}
{{--                            </ul>--}}
{{--                            <div class="d-flex justify-content-between align-items-center">--}}
{{--                                <div class="btn-group">--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>--}}
{{--                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
