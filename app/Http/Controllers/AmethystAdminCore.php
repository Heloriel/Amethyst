<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmethystAdminCore extends Controller
{
    function index(){
        return view('config.index');
    }
}
