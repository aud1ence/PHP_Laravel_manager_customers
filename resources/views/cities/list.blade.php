@extends('cities.master')
@section('title', 'List city')
@section('content')
    <div class="card">
        <table class="table">
            @if(\Illuminate\Support\Facades\Session::has('success'))
                <div class="card-header">
                    <h4 class="text-success">{{ \Illuminate\Support\Facades\Session::get('success') }}</h4>
                </div>
            @endif
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">City</th>
                <th scope="col">Edit</th>
                <th scope="col">Count</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @forelse($cities as $key => $city)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td><a href="{{ route('cities.show', $city->id) }}">{{ $city->name }}</a></td>
                    <td><a href="{{ route('cities.edit', $city->id) }}">Config</a></td>
                    <td><a href="">{{ count($city->customers) }}</a></td>
                    <td><a href="{{ route('cities.destroy', $city->id) }}" class="text-danger"
                           onclick="return confirm('Are you sure?')">Delete</a></td>
                </tr>
            @empty
                <td colspan="5">No data</td>
            @endforelse
            <tr>
                <td colspan="5"><button style="width: 100%" class="button is-info is-light">
                        <a href="{{ route('cities.create') }}">Add</a>
                    </button></td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
