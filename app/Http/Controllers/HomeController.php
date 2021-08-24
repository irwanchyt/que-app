<?php

namespace App\Http\Controllers;

use App\User;
use App\Visitor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Builder;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        if(auth()->user()->role === 'Admin') {

            $visitor = Visitor::whereHas('counter', function(Builder $query) {
                $query->where('user_id', auth()->id());
             })->get();

            return view('pages.admin.dashboard',['visitor'=>$visitor]);
        } else {

            $users = User::where('role','Admin')->get();
            $visitor = Visitor::paginate(5);
            $count = $users->count();
            $chartjs = app()->chartjs
                            ->name('lineChartTest')
                            ->type('line')
                            ->size(['width' => 400, 'height' => 200])
                            ->labels(['January', 'February', 'March', 'April', 'May', 'June', 'July','Agustus','September','Oktober','November','Desember'])
                            ->datasets([
                                            [
                                                "label" => "My First dataset",
                                                'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                                                'borderColor' => "rgba(38, 185, 154, 0.7)",
                                                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                                                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                                                "pointHoverBackgroundColor" => "#fff",
                                                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                                                'data' => [65, 59, 80, 81, 56, 55, 40,60,70,75],
                                            ],
                                            [
                                                "label" => "My Second dataset",
                                                'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                                                'borderColor' => "rgba(38, 185, 154, 0.7)",
                                                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                                                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                                                "pointHoverBackgroundColor" => "#fff",
                                                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                                                'data' => [12, 33, 44, 44, 55, 23, 40],
                                            ]
                                        ])
                                        ->options([]);



            return view('pages.dashboard',['users'=>$users,'count'=>$count,'visitor'=>$visitor,'chartjs'=>$chartjs]);
        }
        // return $count;


    }
}
