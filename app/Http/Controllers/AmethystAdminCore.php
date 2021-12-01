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

        $status_json = json_encode($this->all_status->toArray());

        return view('config.status', [
            'status' => $this->all_status,
            'status_json' => $status_json
        ]);
    }

    function portal_config(){
        return view('config.index');
    }

    public function save_status(Request $request)
    {
        $status_array = json_decode($request->statusJson);

        foreach($status_array as $new_status){

            $old_status = Status::get()->where('id', '=', $new_status->id)->first();

            if($new_status->name != $old_status->name || $new_status->color != $old_status->color){
                $old_status->name = $new_status->name;
                $old_status->color = $new_status->color;
                $old_status->save();
            }
        }
        return redirect('/config/status')->with('alert', 'Lista de situações atualizada com sucesso!')->with('type', 'success')->with('aicon', 'check-circle');
    }

    public function delete_status($id)
    {
        $stts = Status::where('id', $id)->first();
        $stts->delete();
        return redirect('/config/status')->with('alert', 'Registro deletado com sucesso!')->with('type', 'danger')->with('aicon', 'trash');
    }

}
