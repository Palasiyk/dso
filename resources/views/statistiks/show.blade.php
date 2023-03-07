@extends('layouts.app')

@section('content')

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
            <tbody>
            <tr>
                <th scope="row">{{ $id->PlayerNu }}</th>
                <td>{{ $id->name }}</td>
                <td>{{ $id->PlayedSet }}</td>
                <td>{{ $id->TotPoint }}</td>
                <td>{{ $id->TotServ }}</td>
                <td>{{ $id->AceServ }}</td>
                <td>{{ $id->ErrServ }}</td>
                <td>{{ $id->EffServ }}</td>
                <td>{{ $id->TotRes }}</td>
                <td>{{ $id->ErrRes }}</td>
                <td>{{ $id->NegRes }}</td>
                <td>{{ $id->ExcRes }}</td>
                <td>{{ $id->TotAtac }}</td>
                <td>{{ $id->ErrAtac }}</td>
                <td>{{ $id->ExcAtec }}</td>
                <td>{{ $id->EffAtec }}</td>
                <td>{{ $id->Block }}</td>
            </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <a href="{{route('statPlayer')}}" class="btn btn-sm btn-outline-secondary">BACK</a>
                <a href="{{route('editStatPlayer', $id->id)}}" class="btn btn-sm btn-outline-secondary">UPDATE</a>
                <form action="{{ route('deleteStatPlayer', $id->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="DELETE" class="btn btn-sm btn-outline-secondary">
                </form>
            </div>
        </div>
    </div>


@endsection
