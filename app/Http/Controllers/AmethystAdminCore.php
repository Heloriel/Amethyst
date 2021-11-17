<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmethystAdminCore extends Controller
{
    function general_config(){
        return view('config.index');
    }

    function status_config(){
        return view('config.status');
    }

    function portal_config(){
        return view('config.index');
    }
}
