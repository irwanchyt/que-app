<?php

use App\Ticket;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ticket::insert([
            [
                'counter_id'    => '1',
                'number_que'  => '001',
                'category_id' => '1',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'counter_id'    => '1',
                'number_que'  => '002',
                'category_id' => '1',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'counter_id'    => '1',
                'number_que'  => '003',
                'category_id' => '1',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'counter_id'    => '2',
                'number_que'  => '001',
                'category_id' => '2',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'counter_id'    => '2',
                'number_que'  => '002',
                'category_id' => '2',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'counter_id'    => '2',
                'number_que'  => '003',
                'category_id' => '2',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'counter_id'    => '3',
                'number_que'  => '001',
                'category_id' => '2',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'counter_id'    => '3',
                'number_que'  => '002',
                'category_id' => '2',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'counter_id'    => '3',
                'number_que'  => '003',
                'category_id' => '2',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'counter_id'    => '4',
                'number_que'  => '001',
                'category_id' => '2',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'counter_id'    => '4',
                'number_que'  => '002',
                'category_id' => '2',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'counter_id'    => '4',
                'number_que'  => '003',
                'category_id' => '2',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}
