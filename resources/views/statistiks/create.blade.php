@extends('layouts.app')

@section('content')

    <container>
        <form class="form-control w-50" action="{{ route('storeStatPlayer') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="number" class="form-label">Number</label>
                <input class="form-control" name="PlayerNu" type="number" id="PlayerNu">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1">Name</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="name">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">PlayedSet</label>
                <input class="form-control" name="PlayedSet" type="number" id="PlayedSet">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">TotPoint</label>
                <input class="form-control" name="TotPoint" type="number" id="TotPoint">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">TotServ</label>
                <input class="form-control" name="TotServ" type="number" id="TotServ">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">AceServ</label>
                <input class="form-control" name="AceServ" type="number" id="AceServ">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">ErrServ</label>
                <input class="form-control" name="ErrServ" type="number" id="ErrServ">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">EffServ</label>
                <input class="form-control" name="EffServ" type="number" id="EffServ">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">TotRes</label>
                <input class="form-control" name="TotRes" type="number" id="TotRes">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">ErrRes</label>
                <input class="form-control" name="ErrRes" type="number" id="ErrRes">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">NegRes</label>
                <input class="form-control" name="NegRes" type="number" id="NegRes">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">ExcRes</label>
                <input class="form-control" name="ExcRes" type="number" id="ExcRes">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">TotAtac</label>
                <input class="form-control" name="TotAtac" type="number" id="TotAtac">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">ErrAtac</label>
                <input class="form-control" name="ErrAtac" type="number" id="ErrAtac">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">BlkAtec</label>
                <input class="form-control" name="BlkAtec" type="number" id="BlkAtec">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">ExcAtec</label>
                <input class="form-control" name="ExcAtec" type="number" id="ExcAtec">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">EffAtec	</label>
                <input class="form-control" name="EffAtec" type="number" id="EffAtec	">
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Block</label>
                <input class="form-control" name="Block" type="number" id="Block">
            </div>
            <button class="btn btn-success text-black" type="submit">
                CREATE
            </button>
        </form>
    </container>

@endsection
