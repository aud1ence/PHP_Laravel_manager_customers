@extends('cities.master')
@section('title', 'Create city')
@section('content')
    <div class="card">
        <div class="card-title"></div>
        <div class="card-body">

            <form action="{{ route('cities.store') }}" method="POST">
                @csrf
                <button type="submit" class="button is-success is-light" style="float: right">Submit</button>
                <label for="">City</label>
                <input class="input is-rounded" type="text" name="name">
                <button style="float: right" class="button is-danger is-light" onclick="window.history.go(-1); return false;">Cancel</button>
            </form>
        </div>
    </div>
@endsection
