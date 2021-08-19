<?php

use App\Counter;
use Illuminate\Database\Seeder;

class CounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Counter::insert([
            [
                'name' => 'Loket 1',
            ],
            [
                'name' => 'Loket 2',
            ],
            [
                'name' => 'Loket 3',
            ],
            [
                'name' => 'Loket 4',
            ],
        ]);
    }
}
