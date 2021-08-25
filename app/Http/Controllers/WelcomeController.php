<?php

namespace App\Http\Controllers;

use App\Ticket;
use App\Counter;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {

         $counters = Counter::all();

        return view('welcome', compact('counters'));
    }

    public function show(Request $request,$id)
    {
        $counters = Counter::findOrFail($id);
        $t = $counters->user_id;

        $loket    = $counters->name;
        // $tgl =  date('Y-m-d H:i:s');
        // return $tgl;

         $data   = new Ticket;
         $data->counter_id = $id;
         $data->number_que = $t;

         $data->save();

         //return $tgl;
         $ticket= DB::table('tickets')
        ->select(DB::raw('count(*) as jumlah, counter_id'))
        ->where('created_at', '>=', date('Y-m-d').' 00:00:00')
        ->groupBy ('counter_id')->get();
        //return $ticket;
        $counter = $id;
        switch ($counter) {
            case $counter:
                foreach($ticket as $t){

                    // echo $t->counter_id.'=='.$counter;
                    // echo '</br>';
                    if($t->counter_id == $id){
                        $data = $t->jumlah;

                        //return $data;
                        return view('test',['data'=>$data,'counters'=>$counter,'loket'=>$loket]);
                    }
                }
                //echo "Isi variabel angka adalah satu".$counter;
                break;

            default:
                echo "id loket tidak diketahui";
                break;
        }



    }
}
