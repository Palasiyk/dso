@extends('layouts.app')

@section('content')

    <container>
        <form class="form-control w-50" action="{{ route('storePlayer') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1">Name</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="name">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1">SPORT NATIONALITY</label>
                <input name="nacionality" type="text" class="form-control" id="nacionality" placeholder="NATIONALITY">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1">BIRTH PLACE</label>
                <input name="bith_place" type="text" class="form-control" id="bith_place" placeholder="BIRTH PLACE">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Number</label>
                <input class="form-control" name="namber" type="number" id="number">
            </div>
            <select class="form-select form-select-lg mb-3" aria-label="Default select example" name="position" id="position">
                <option selected>Position</option>
                <option value="Setter">Setter</option>
                <option value="Middle-blocker">Middle-blocker</option>
                <option value="Opposite">Opposite</option>
                <option value="Libero">Libero</option>
                <option value="Wing-spiker">Wing-spiker</option>
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
                CREATE
            </button>
        </form>
    </container>

@endsection