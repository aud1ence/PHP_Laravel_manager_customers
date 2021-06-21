<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = new City();
        $city->id = 1;
        $city->name = 'New York';
        $city->save();

        $city = new City();
        $city->id = 2;
        $city->name = 'London';
        $city->save();

        $city = new City();
        $city->id = 3;
        $city->name = 'Tokyo';
        $city->save();
    }
}
