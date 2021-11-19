<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

use App\Models\Preg;
use App\Models\Status;
use App\Models\Portal;

use Illuminate\Support\Facades\DB;

class AmethystCoreController extends Controller
{
    #region FIELDS SETUP
    private $today;
    private $tomorrow;
    private $today_formatted;
    private $now;
    private $all_status;
    private $all_portals;
    #endregion

    #region CONSTRUCTOR
    public function __construct(){
        $this->today = Date('Y-m-d', time());
        $this->tomorrow = Date('Y-m-d', strtotime(' +1 day'));
        $this->today_formatted = Date('d/m/Y');
        $this->now = Date('H:i');
        $this->all_status = Status::all();
        $this->all_portals = Portal::all();
    }
    #endregion

    #region VIEWS
    public function index(){
        return view('login');
    }

    public function home_view(){

        $pregs_today = count(Preg::all()->where("date", "=", $this->today));
        $pregs_tomorrow = count(Preg::all()->where("date", "=", $this->tomorrow));

        return view('home', [
            'pregs_today' => $pregs_today,
            'pregs_tomorrow' => $pregs_tomorrow,
            'portal' => $this->all_portals
        ]);
    }

    public function manager_view(){

        $fetch_all = DB::table('pregs')->where("date", ">=", $this->today)->orderBy('date')->orderBy('time')->paginate(20);

        foreach($this->all_status as $value){
            $name = $value->name;
            $color = $value->color;
            $status_array[$value->id] = [$name, $color];
        }


        foreach($this->all_portals as $value){
            $name = $value->name;
            $url = $value->base_url;
            $portal_array[$value->id] = [$name, $url];
        }


        return view('manager', [
            'today_date' => $this->today_formatted,
            'time_now' => $this->now,
            'fetch' => $fetch_all,
            'status' => $status_array,
            'portal' => $portal_array
        ]);
    }

    public function edit_view($id){
        $fetch = Preg::where('id', $id)->first();
        return view('edit', [
            'today_date' => $this->today_formatted,
            'time_now' => $this->now,
            'preg' => $fetch,
            'status' => $this->all_status,
            'portal' => $this->all_portals
        ]);
    }

    public function create_view(){
        return view('create', [
            'today_date' => $this->today_formatted,
            'time_now' => $this->now,
            'status' => $this->all_status,
            'portal' => $this->all_portals
        ]);
    }
    #endregion

    #region DATABASE OPERATIONS
    public function preg_create(Request $request){
        $preg = new Preg();
        $preg->uasg = $request->uasg;
        $preg->preg = $request->preg;
        $preg->name = $request->name;
        $preg->type = $request->type;
        $preg->portal = $request->portal;
        $preg->status = $request->status;
        $preg->publication = $request->publication;
        $preg->date = $request->date;
        $preg->time = $request->time;
        $preg->obs = $request->obs;
        $preg->tags = 'disabled';
        $preg->save();

        return redirect('/create')->with('alert', 'Licitação cadastrada com sucesso!')->with('type', 'success');
    }

    public function preg_update(Request $request, $id){
        $preg = Preg::where('id', $id)->first();
        $preg->uasg = $request->uasg;
        $preg->preg = $request->preg;
        $preg->name = $request->name;
        $preg->type = $request->type;
        $preg->portal = $request->portal;
        $preg->status = $request->status;
        $preg->publication = $request->publication;
        $preg->date = $request->date;
        $preg->time = $request->time;
        $preg->obs = $request->obs;
        $preg->tags = 'disabled';
        $preg->save();

        return redirect('/manager')->with('alert', 'Licitação atualizada com sucesso!')->with('type', 'success');
    }

    public function preg_delete($id)
    {
        Preg::where('id', $id)->delete();
        return redirect('/manager')->with('alert', 'Pregão deletado com sucesso!')->with('type', 'success');
    }
    #endregion
}
