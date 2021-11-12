<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class AmethystCoreController extends Controller
{

    private $today;
    private $now;

    public function __construct(){
        $this->today = Date('d/m/Y');
        $this->now = Date('H:i');
    }

    public function index(){
        return view('login');
    }

    public function home_view(){
        return view('home');
    }

    public function manager_view(){
        return view('manager', ['today_date' => $this->today, 'time_now' => $this->now]);
    }

    public function addnew_view(){        
        return view('addnew', ['today_date' => $this->today, 'time_now' => $this->now]);
    }

}
