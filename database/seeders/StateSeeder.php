<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('states')->insert(array(
			array(
            'name' => "Australian Capital Territory",
            'country_id' => 1
			),
			array(
            'name' => "New South Wales",
            'country_id' => 1
			),
			array(
            'name' => "Northern Territory",
            'country_id' => 1
			),
			array(
            'name' => "Queensland",
            'country_id' => 1
			),
			array(
            'name' => "South Australia",
            'country_id' => 1
			),
			array(
            'name' => "Tasmania",
            'country_id' => 1
			),
			array(
            'name' => "Victoria",
            'country_id' => 1
			),
			array(
            'name' => "Western Australia",
            'country_id' => 1
			),
			array(
            'name' => "Auckland",
            'country_id' => 2
			),
			array(
            'name' => "New Plymouth",
            'country_id' => 2
			),
			array(
            'name' => "Wellington",
            'country_id' => 2
			),
			array(
            'name' => "Nelson",
            'country_id' => 2
			),
			array(
            'name' => "Canterbury",
            'country_id' => 2
			),
			array(
            'name' => "Otago",
            'country_id' => 2
			),
			array(
            'name' => "Delhi",
            'country_id' => 3
			),
			array(
            'name' => "Rajasthan",
            'country_id' => 3
			),
			array(
            'name' => "Madhya Pradesh",
            'country_id' => 3
			),
			array(
            'name' => "Maharashtra",
            'country_id' => 3
			),
			array(
            'name' => "Uttar Pradesh",
            'country_id' => 3
			),
			array(
            'name' => "Gujarat",
            'country_id' => 3
			),
			array(
            'name' => "Karnataka",
            'country_id' => 3
			),
			array(
            'name' => "Andhra Pradesh",
            'country_id' => 3
			),
			array(
            'name' => "Odisha",
            'country_id' => 3
			),
			array(
            'name' => "Chhattisgarh",
            'country_id' => 3
			),
			array(
            'name' => "Tamil Nadu",
            'country_id' => 3
			),
			array(
            'name' => "Punjab",
            'country_id' => 3
			)
        ));
    }
}
