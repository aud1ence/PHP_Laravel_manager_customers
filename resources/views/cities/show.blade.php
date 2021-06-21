@extends('customers.master')
@section('title', 'Show customers')
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
                <th scope="col">Customer Name</th>
                <th scope="col">Email address</th>
                <th scope="col">City</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            {{--                @foreach($customers as $customer)--}}
            {{--                <tr>{{ $customer }}</tr>--}}
            {{--                @endforeach--}}
            <tbody>
            @forelse($customers as $key => $customer)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
{{--                    @if($customer->city)--}}
{{--                        <td>--}}
{{--                            <a href="{{ route('customers.city', $customer->city_id) }}">{{ $customer->city->name }}</a>--}}
{{--                        </td>--}}
{{--                    @else--}}
{{--                        <td>Not info</td>--}}
{{--                    @endif--}}
                    <td>{{ $customer->city->name }}</td>
                    <td><a href="{{ route('customers.edit', $customer->id) }}">Edit</a></td>
{{--                    <td><a href="">{{ count($city->customers) }}</a></td>--}}
                    <td><a href="{{ route('customers.destroy', $customer->id) }}" class="text-danger"
                           onclick="return confirm('Are you sure?')">Delete</a></td>
                </tr>
            @empty
                <td colspan="6">No data</td>
            @endforelse
            <tr>
                <td colspan="6"><button style="width: 100%" class="button is-info is-light">
                        <a href="{{ route('customers.create') }}">Add</a>
                    </button></td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
