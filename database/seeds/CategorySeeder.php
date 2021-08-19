<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return DB::table('categories')->insert([

            ['name'=>'umum','initial'=>'UM'],
            ['name'=>'bpjs','initial'=>'BP'],
        ]);
    }
}
