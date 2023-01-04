<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 50; $i++)
        {
            DB::table('people')->insert([
                'name'=> Str::random(15),
                'surname'=> Str::random(30),
                'telephonenumber'=> rand(1000000,999999999),
                'street'=> Str::random(30),
                'town'=> Str::random(30)
            ]);
        }
    }
}
