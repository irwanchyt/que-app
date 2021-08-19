<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\Counter;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
      
         $counters = Counter::with('ticket')->get();

        return view('welcome', compact('counters'));
    }

    public function show($id)
    {
             $counter = Counter::with('ticket.category')->findOrFail($id);
            foreach($counter->ticket as $count){
                $count->category['number_que'];
            }
         
        return view('pages.ticket', compact('counter', 'count'));
    }
}
