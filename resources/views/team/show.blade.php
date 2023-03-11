@extends('layouts.app')

@section('content')

    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="row">
                <div class="col justify-content-center ">
                    <img class="bd-placeholder-img card-img-top" style="max-width: 700px" src="../img/team/{{$id->image}}" alt="omelchenko">
                </div>
                <div class="col card-header py-3">
                    <h4 class="team_name my-0">{{$id->name}}</h4>
                    <div class="card-body">
                        <h2 class="card_text card-title pricing-card-title">SHIRT NUMBER <span class="card_subtext">{{$id->namber}}</span></h2>
                        <h2 class="card_text card-title pricing-card-title">POSITION <span class="card_subtext">{{$id->position}}</span></h2>
                        <h2 class="card_text card-title pricing-card-title">SPORT NATIONALITY  <span class="card_subtext">{{$id->nacionality}}</span></h2>
                        <h2 class="card_text card-title pricing-card-title">BIRTH PLACE  <span class="card_subtext">{{$id->bith_place}}</span></h2>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li class="card_text">HEIGTH <span class="card_subtext">{{$id->height}}</span></li>
                            <li class="card_text">JUMP <span class="card_subtext">{{$id->jump}}</span></li>
                            <li class="card_text">DATE OF BIRTH <span class="card_subtext">{{$id->byrthday}}</span></li>
                        </ul>

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">NumberPlayer</th>
                                <th scope="col">PlayerName</th>
                                <th scope="col">Played Set</th>
                                <th scope="col">TotPoint</th>
                                <th scope="col">TotServ</th>
                                <th scope="col">AceServ</th>
                                <th scope="col">ErrServ</th>
                                <th scope="col">EffServ</th>
                                <th scope="col">TotRes</th>
                                <th scope="col">ErrRes</th>
                                <th scope="col">NegRes</th>
                                <th scope="col">ExcRes</th>
                                <th scope="col">TotAtac</th>
                                <th scope="col">ErrAtac</th>
                                <th scope="col">ExcAtec</th>
                                <th scope="col">EffAtec</th>
                                <th scope="col">Block</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">{{ $id -> stat['team_namber']}}</th>
                                <td>{{ $id -> stat['PlayerName'] }}</td>
                                <td>{{ $id -> stat['PlayedSet'] }}</td>
                                <td>{{ $id -> stat['TotPoint'] }}</td>
                                <td>{{ $id -> stat['TotServ'] }}</td>
                                <td>{{ $id -> stat['AceServ'] }}</td>
                                <td>{{ $id -> stat['ErrServ'] }}</td>
                                <td>{{ $id -> stat['EffServ'] }}</td>
                                <td>{{ $id -> stat['TotRes'] }}</td>
                                <td>{{ $id -> stat['ErrRes'] }}</td>
                                <td>{{ $id -> stat['NegRes'] }}</td>
                                <td>{{ $id -> stat['ExcRes'] }}</td>
                                <td>{{ $id -> stat['TotAtac'] }}</td>
                                <td>{{ $id -> stat['ErrAtac'] }}</td>
                                <td>{{ $id -> stat['ExcAtec'] }}</td>
                                <td>{{ $id -> stat['EffAtec'] }}</td>
                                <td>{{ $id -> stat['Block'] }}</td>
                            </tr>
                            </tbody>
                        </table>


                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{route('teamPlayer')}}" class="btn btn-sm btn-outline-secondary">BACK</a>
                                <a href="{{route('editPlayer', $id->id)}}" class="btn btn-sm btn-outline-secondary">UPDATE</a>
                                <form action="{{ route('deletePlayer', $id->id) }}" method="post">
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
