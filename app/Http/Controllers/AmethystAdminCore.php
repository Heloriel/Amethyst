<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;

class AmethystAdminCore extends Controller
{
    private $all_status;

    function __construct(){
        $this->all_status = Status::all();
    }

    function general_config(){
        return view('config.index');
    }

    function status_config(){

        return view('config.status', [
            'status' => $this->all_status
        ]);
    }

    function portal_config(){
        return view('config.index');
    }

    public function save_status(Request $request)
    {
        // $status_model = new Status();

        // foreach($request as $status_array){

        //     dd($request);

        //     $current_sts_value = Status::get()->where('id', '=', $status_array->id);

        //     if($current_sts_value->name != $status_array->input('status.name') || $current_sts_value->color != $status_array->input('status.color')){
        //         $status_model->name = $status_array->input('status.name');
        //         $status_model->color = $status_array->input('status.color');
        //         $status_model->save();
        //     }
        // }
        // return redirect('/config/status')->with('alert', 'Registro criado com sucesso!')->with('type', 'success')->with('aicon', 'check-circle');
    }
}
