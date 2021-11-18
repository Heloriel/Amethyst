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
    #endregion

    #region CONSTRUCTOR
    public function __construct(){
        $this->today = Date('Y-m-d', time());
        $this->tomorrow = Date('Y-m-d', strtotime(' +1 day'));
        $this->today_formatted = Date('d/m/Y');
        $this->now = Date('H:i');
    }
    #endregion

    #region VIEWS
    public function index(){
        return view('login');
    }

    public function home_view(){

        $pregs_today = count(Preg::all()->where("date", "=", $this->today));
        $pregs_tomorrow = count(Preg::all()->where("date", "=", $this->tomorrow));

        return view('home', ['pregs_today' => $pregs_today, 'pregs_tomorrow' => $pregs_tomorrow]);
    }

    public function manager_view(){

        $fetch_all = DB::table('pregs')->where("date", ">=", $this->today)->orderBy('date')->orderBy('time')->paginate(20);
        $fetch_status = Status::all();
        $fetch_portal = Portal::all();
        
        foreach($fetch_status as $key => $value){
            $name = $value->name;
            $color = $value->color;
            $status_array[$value->id] = [$name, $color];
        }

        return view('manager', [
            'today_date' => $this->today_formatted,
            'time_now' => $this->now,
            'fetch' => $fetch_all,
            'status' => $status_array,
            'portal' => $fetch_portal
        ]);
    }

    public function create_view(){
        
        $fetch_status = Status::all();
        $fetch_portal = Portal::all();

        return view('create', [
            'today_date' => $this->today_formatted,
            'time_now' => $this->now,
            'status' => $fetch_status,
            'portal' => $fetch_portal
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
        $preg->date = $request->date;
        $preg->time = $request->time;
        $preg->obs = $request->obs;
        $preg->tags = 'disabled';

        $preg->save();
        return redirect('/create')->with('alert', 'Licitação cadastrada com sucesso!');
    }
    #endregion
}
