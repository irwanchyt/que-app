<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return DB::table('users')->insert([

            [
                'name'  => 'admin',
                'email' => 'admin@gmail.com',
                'password'=>bcrypt('admin1234'),
                'phone' => '08799726282',
                'role'  => 'Super Admin'
            ]

        ]);
    }
}
