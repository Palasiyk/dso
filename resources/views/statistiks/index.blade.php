@extends('layouts.app')

@section('content')

    <h2 class="team_list_name">Player Statistiks</h2>
{{--        @if(Route::has('login');--}}
            <a href="{{route('createStatPlayer')}}" class="btn btn-sm btn-outline-secondary">CREATE</a>
{{--        @endif--}}
    <div class="container" style="margin: 0 auto; width: 100%; max-width: 1400px">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">NumberPlayer</th>
                <th scope="col">Player</th>
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
            @foreach($team as $title)
            <tbody>
            <tr>

                 <th scope="row">
                     <a href="{{ route('showStatPlayer', $title->id) }}">
                        {{ $title->PlayerNu }}
                     </a>
                 </th>
                <td>
                    <a href="{{ route('showStatPlayer', $title->id) }}">
                        {{ $title->name }}
                    </a>
                </td>
                <td>{{ $title->PlayedSet }}</td>
                <td>{{ $title->TotPoint }}</td>
                <td>{{ $title->TotServ }}</td>
                <td>{{ $title->AceServ }}</td>
                <td>{{ $title->ErrServ }}</td>
                <td>{{ $title->EffServ }}</td>
                <td>{{ $title->TotRes }}</td>
                <td>{{ $title->ErrRes }}</td>
                <td>{{ $title->NegRes }}</td>
                <td>{{ $title->ExcRes }}</td>
                <td>{{ $title->TotAtac }}</td>
                <td>{{ $title->ErrAtac }}</td>
                <td>{{ $title->ExcAtec }}</td>
                <td>{{ $title->EffAtec }}</td>
                <td>{{ $title->Block }}</td>
            </tr>
            </tbody>
            @endforeach
        </table>
    </div>

@endsection
