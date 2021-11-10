<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmethystCoreController extends Controller
{
    public function index(){
        return view('login');
    }

    public function home_view(){
        return view('home');
    }

    public function addnew_view(){
        return view('addnew');
    }

}
