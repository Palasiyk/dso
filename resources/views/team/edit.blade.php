@extends('layouts.app')

@section('content')

    <container>
        <form class="form-control w-50" action="{{ route('updatePlayer', $player_id->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="exampleFormControlInput1">Name</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="name">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Number</label>
                <input class="form-control" name="namber" type="number" id="number">
            </div>
            <select class="form-select form-select-lg mb-3" aria-label="Default select example" name="position" id="position">
                <option selected>Position</option>
                <option value="1">setter</option>
                <option value="2">midle</option>
                <option value="3">opposite</option>
            </select>
            <div class="mb-3">
                <label for="date">byrthday date</label>
                <input class="form-control" name="byrthday" type="date" id="byrthday">
            </div>
            <div class="mb-3">
                <label for="number">height</label>
                <input name="height" class="form-control" type="number" id="height">
            </div>
            <div class="mb-3">
                <label for="number">weight</label>
                <input name="weight" class="form-control" type="number" id="weight">
            </div>
            <div class="mb-3">
                <label for="number">jump</label>
                <input name="jump" class="form-control" type="number" id="jump">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Default file input example</label>
                <input name="image" class="form-control btn btn-secondary" type="file" id="formFile">
            </div>

            <button class="btn btn-success text-black" type="submit">
                UPDATE
            </button>
        </form>
    </container>

@endsection
