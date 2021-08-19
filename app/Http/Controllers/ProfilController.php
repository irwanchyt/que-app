<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilController extends Controller
{


    public function index(){

        return view('pages.setting');
    }



}
