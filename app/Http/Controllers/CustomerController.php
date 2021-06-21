<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Customer;
use Illuminate\Http\Request;


class CustomerController extends Controller
{

    public function index()
    {
        $customers = Customer::all();
        $cities = City::all();
        return view('customers.list', compact('customers', 'cities'));
    }

    public function create()
    {
        $cities = City::all();
        return view('customers.create', compact('cities'));
    }

    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->dob = $request->input('dob');
        $customer->city_id = $request->input('city_id');
        $customer->save();

        \Illuminate\Support\Facades\Session::flash('success', 'Created success');
        return redirect()->route('customers.index');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        $cities = City::all();
        return view('customers.edit', compact('customer', 'cities'));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->dob = $request->input('dob');
        $customer->city_id = $request->input('city_id');
        $customer->save();

        \Illuminate\Support\Facades\Session::flash('success', 'Updated success');
        return redirect()->route('customers.index');
    }

    public function destroy($id)
    {

        $customer = Customer::findOrFail($id);

        $customer->delete();

        \Illuminate\Support\Facades\Session::flash('success', 'Deleted success');
        return redirect()->route('customers.index');
    }

    public function getCustomerOfCity($city_id)
    {

        $customers = Customer::with('city')->where('city_id', $city_id)->get();
        dd($customers);
        return view('customers.show', ['customers']);
    }
}
