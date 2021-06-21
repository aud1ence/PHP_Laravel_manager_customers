@extends('cities.master')
@section('title', 'Edit city')
@section('content')
    <div class="card">
        <div class="card-title">

        </div>
        <label for="" style="text-align: center">City</label>

        <div class="card-body">
            <form action="{{ route('cities.update', $city->id) }}" method="POST">
                @csrf
                <input class="input is-rounded" type="text" value="{{ $city->name }}" name="name">
                <button style="float: right" class="button is-danger is-light" onclick="window.history.go(-1); return false;">Cancel</button>
                <button type="submit" class="button is-success is-light" style="float: left">Submit</button>

            </form>
        </div>
    </div>
@endsection
