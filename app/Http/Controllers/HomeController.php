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
            return view('pages.dashboard',['users'=>$users,'count'=>$count,'visitor'=>$visitor]);
        }
        // return $count;

       
    }
}
