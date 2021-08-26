<?php

namespace App\Http\Controllers;

use App\Counter;
use App\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoardController extends Controller
{
    public function index(){

        $counter = Counter::all();

        $visitor= DB::table('visitors')
        ->select(DB::raw('count(*) as jumlah, counter_id'))
        ->where('created_at', '>=', date('Y-m-d').' 00:00:00')
        ->groupBy ('counter_id')->get();

        if(count($visitor) === 0){
            $vi = 0;
            //return "true";
        }else{

            
        }

        //return $vi;
       return view('board',['counter'=>$counter,'vi'=>$vi]);
    }
}
