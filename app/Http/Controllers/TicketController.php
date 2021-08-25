<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Ticket;
use App\Counter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Query\Builder;

class TicketController extends Controller
{

    public function index(){


       $ticket = Ticket::with('user')->where('number_que','=','3')->count();


        return $ticket;




        // $auth = Auth()->User()->id;
        // return $auth ;

        // //$ticket = Ticket::all();
        // $ticket= DB::table('tickets')
        // ->select(DB::raw('count(*) as jumlah, counter_id'))
        // ->where('created_at' ,'>=', date('Y-m-d').' 00:00:00')
        // ->groupBy('counter_id')->pluck('jumlah','counter_id');

        // return $ticket;
        //$user = User::find(5);
        //return $user;
        // $t= User::with('ticket')
        // ->get();
        // return $t;

        // $users = Counter::whereHas('ticket', function($q){
        //     $q->where('created_at', '>=', '2021-08-25 00:00:00');
        // })->get();

        // return $users;
    }
}
