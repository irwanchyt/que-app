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
      
         $counters = Counter::with('ticket.category')->get();

        return view('welcome', compact('counters'));
    }

    public function show($id)
    {
         $counter = Counter::with('ticket.category')->findOrFail($id);

        foreach($counter->ticket as $count){
            echo $count->category['number_que'];
        }
     $count->with('category')->find($count->id);
        //  return $counts = $count->whereHas('category', function ($q) use ($id){
        //      return $q->where('category_id', $id);
        //  })->with('category')->first();

        return view('pages.ticket', compact('counter', 'count'));
    }
}
