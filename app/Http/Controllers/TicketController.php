<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Counter;
use DB;

class TicketController extends Controller
{

    public function index(){

        
        // $ticket = Ticket::all();
        $ticket= DB::table('tickets')
        ->select(DB::raw('count(*) as jumlah, counter_id'))
        ->where('created_at' ,'>=', date('Y-m-d').' 00:00:00')
        ->groupBy('counter_id')->get();

        foreach($ticket as $t){

            // echo 'total tiket'.' '.$t->jumlah.' '.'id loket'.' '.$t->counter_id;
            // echo "<br />";
            if($t->counter_id === 4){

                $te = $t->jumlah;
            }


        }

        return $te;
    }
}
