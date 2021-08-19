<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $faker = Faker::create('id_ID');

    	for($i = 1; $i <= 2; $i++){

    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('admins')->insert([

    			'category_id' => $faker->randomElement($array = array ('1','2')),
    			'name' => $faker->name,
    			'phone' => $faker->randomElement($array = array ('08214456677','08235567788','0874333456667','0886467788','08754346788','0856789006','0876434566')) ,
                'address'=>$faker->address,

    		]);
        }
    }
}
