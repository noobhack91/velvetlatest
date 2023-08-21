<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class AccountClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('account_classes')->insert(array(
			array(
            'name' => "independent"
			),
			array(
            'name' => "establishment"
			),
			array(
            'name' => "agency"
			)
        ));
    }
}
