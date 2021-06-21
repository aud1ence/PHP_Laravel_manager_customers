@extends('customers.master')
@section('title', 'Create customer')
@section('content')
    <div class="card">
        <div class="card-title"></div>
        <div class="card-body">

            <form action="{{ route('customers.store') }}" method="POST">
                @csrf
                <label for="">Customer Name</label>
                <input class="input is-rounded" type="text" name="name">
                <label for="">Email address</label>
                <input class="input is-rounded" type="text" name="email">
                <label for="">Birthday</label>
                <input class="input is-rounded" type="date" name="dob">
                <div class="form-group">
                    <label>City</label>
                    <select class="form-control" name="city_id">
                        @foreach($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button style="float: right" class="button is-danger is-light" onclick="window.history.go(-1); return false;">Cancel</button>
                <button type="submit" class="button is-success is-light" style="float: left">Submit</button>

            </form>
        </div>
    </div>
@endsection
