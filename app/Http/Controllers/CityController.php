<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CityController extends Controller
{

    public function index()
    {
        $cities = City::all();

        return view('cities.list', compact('cities'));
    }

    public function create()
    {
        return view('cities.create');
    }

    public function store(Request $request)
    {
        $city = new City();
        $city->name = $request->input('name');
        $city->save();

        Session::flash('success', 'Created success');
        return redirect()->route('cities.index');
    }

    public function show($id)
    {
        $customers = Customer::where('city_id',$id)->get();
//        dd($customers)
        return view('cities.show',compact('customers'));
    }

    public function edit($id)
    {
        $city = City::findOrFail($id);
        return view('cities.edit', compact('city'));
    }

    public function update(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
        $city = City::findOrFail($id);
        $city->name = $request->input('name');
        $city->save();

        Session::flash('success', 'Updated success');
        return redirect()->route('cities.index');
    }

    public function destroy($id)
    {
        $city = City::findOrFail($id);
//        $city->customers->delete();
        $city->delete();
        Session::flash('success', 'Deleted success');
        return redirect()->route('cities.index');
    }


}
