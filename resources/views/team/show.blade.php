@extends('layouts.app')

@section('content')

    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="row">
                <div class="col justify-content-center ">
                    <img class="bd-placeholder-img card-img-top" style="max-width: 700px" src="../img/team/{{$player->image}}" alt="omelchenko">
                </div>
                <div class="col card-header py-3">
                    <h4 class="team_name my-0">{{$player->name}}</h4>
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
                                <a href="{{route('teamPlayer')}}" class="btn btn-sm btn-outline-secondary">BACK</a>
                                <a href="{{route('editPlayer', $player->id)}}" class="btn btn-sm btn-outline-secondary">EDIT</a>
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

@endsection
