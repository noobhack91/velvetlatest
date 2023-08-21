<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert(array(
			array(
            'name' => "Australia"
			),
			array(
            'name' => "New Zealand"
			),
			array(
            'name' => "India"
			)
        ));
    }
}
