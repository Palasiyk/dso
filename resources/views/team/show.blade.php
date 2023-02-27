@extends('layouts.app')

@section('content')

    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
            <img class="team_img bd-placeholder-img card-img-top" src="img/team/{{$player_id->image}}" alt="omelchenko">

            <div class="card-header py-3">
                <h4 class="team_name my-0">{{$player_id->name}}</h4>
            </div>
            <div class="card-body">
                <h2 class="card_text card-title pricing-card-title">SHIRT NUMBER <span class="card_subtext">{{$player_id->namber}}</span></h2>
                <h2 class="card_text card-title pricing-card-title">POSITION <span class="card_subtext">{{$player_id->position}}</span></h2>
                <h2 class="card_text card-title pricing-card-title">SPORT NATIONALITY  <span class="card_subtext">UKR</span></h2>
                <h2 class="card_text card-title pricing-card-title">BIRTH PLACE  <span class="card_subtext">М. ЛЯНТОР (РОСІЙСЬКА ФЕДЕРАЦІЯ)  (УКРАЇНА)</span></h2>
                <ul class="list-unstyled mt-3 mb-4">
                    <li class="card_text">HEIGTH <span class="card_subtext">{{$player_id->height}}</span></li>
                    <li class="card_text">REACH <span class="card_subtext">320</span></li>
                    <li class="card_text">JUMP <span class="card_subtext">{{$player_id->jump}}</span></li>
                    <li class="card_text">DATE OF BIRTH <span class="card_subtext">{{$player_id->byrthday}}</span></li>
                </ul>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="{{route('teamPlayer')}}" class="btn btn-sm btn-outline-secondary">BACK</a>
                        <a href="{{route('createPlayer')}}" class="btn btn-sm btn-outline-secondary">CREATE</a>
                    </div>
                </div>
            </div>

        </div>

@endsection
