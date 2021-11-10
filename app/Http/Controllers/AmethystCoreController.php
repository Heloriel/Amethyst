<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class AmethystCoreController extends Controller
{
    public function index(){
        return view('login');
    }

    public function home_view(){
        return view('home');
    }

    public function addnew_view(){

        $today = Date('d/m/Y');

        return view('addnew', ['today_date' => $today]);
    }

}
