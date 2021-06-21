<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Customer();
        $customer->id = 1;
        $customer->name = "Ronaldo";
        $customer->dob = "2018-09-26";
        $customer->email = "ronaldo@codegym.vn";
        $customer->city_id = 1;
        $customer->save();

        $customer = new Customer();
        $customer->id = 2;
        $customer->name = "Benzema";
        $customer->dob = "2018-09-26";
        $customer->email = "benzema@codegym.vn";
        $customer->city_id = 1;
        $customer->save();

        $customer = new Customer();
        $customer->id = 3;
        $customer->name = "Messi";
        $customer->dob = "2018-09-26";
        $customer->email = "messi@codegym.vn";
        $customer->city_id = 2;
        $customer->save();
    }
}
