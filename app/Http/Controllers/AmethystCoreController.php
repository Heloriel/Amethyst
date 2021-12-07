<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

use App\Models\Preg;
use App\Models\Status;
use App\Models\Portal;
use App\Models\Type;

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
    private $all_types;
    private $direct_url;
    //#region

    #region CONSTRUCTOR
    public function __construct()
    {
        $this->today = Date('Y-m-d', time());
        $this->tomorrow = Date('Y-m-d', strtotime(' +1 day'));
        $this->today_formatted = Date('d/m/Y');
        $this->now = Date('H:i');
        $this->all_status = Status::all();
        $this->all_portals = Portal::all();
        $this->all_types = Type::all();
    }
    #endregion

    #region VIEWS
    public function index()
    {
        return view('login');
    }

    public function view_home()
    {

        $pregs_today = count(Preg::all()->where("date", "=", $this->today));
        $pregs_next = count(Preg::all()->where("date", ">", $this->today));

        return view('home', [
            'pregs_today' => $pregs_today,
            'pregs_next' => $pregs_next,
            'portal' => $this->all_portals
        ]);
    }

    public function view_biddings_list()
    {
        // $fetch_all = DB::table('pregs')->where("date", ">=", $this->today)->where("budget", "=", "1")->orderBy('date')->orderBy('time')->paginate(20);
        $fetch_all = DB::table('pregs')->where("date", ">=", $this->today)->where("budget", "=", "0")->orderBy('date')->orderBy('time')->paginate(20);

        foreach ($this->all_status as $value) {
            $name = $value->name;
            $color = $value->color;
            $status_array[$value->id] = [$name, $color];
        }

        foreach ($this->all_portals as $value) {
            $name = $value->name;
            $url = $value->base_url;
            $durl = $value->direct_url;
            $portal_array[$value->id] = [$name, $url, $durl];
        }

        foreach($fetch_all as $fa){
            $to_replace = array('DATA_UASG', 'DATA_PREG');
            $replacer = array($fa->uasg, $fa->preg);
            $this->direct_url[$fa->id] = str_replace($to_replace, $replacer, $portal_array[$fa->portal][2]);
        }


        return view('biddings_list', [
            'today_date' => $this->today_formatted,
            'time_now' => $this->now,
            'fetch' => $fetch_all,
            'status' => isset($status_array) ? $status_array : "",
            'all_status' => $this->all_status,
            'portal' => $portal_array,
            'direct_url' => $this->direct_url
        ]);
    }

    public function view_budgets_list()
    {
        $fetch_all = DB::table('pregs')->where("date", ">=", $this->today)->where("budget", "=", "1")->orderBy('date')->orderBy('time')->paginate(20);

        return view('budgets_list', [
            'today_date' => $this->today_formatted,
            'time_now' => $this->now,
            'fetch' => $fetch_all,
        ]);
    }

    public function view_create()
    {
        return view('create', [
            'today_date' => $this->today_formatted,
            'time_now' => $this->now,
            'status' => $this->all_status,
            'portal' => $this->all_portals,
            'type' => $this->all_types
        ]);
    }

    public function view_edit($id)
    {
        $fetch = Preg::where('id', $id)->first();
        $tags_array =  explode(',', $fetch->tags);
        $tags_count = count($tags_array);
        $to_replace = array('DATA_UASG', 'DATA_PREG');
        $replacer = array($fetch->uasg, $fetch->preg);
        $this->direct_url = str_replace($to_replace, $replacer, $this->all_portals->where('id', '==' ,$fetch->portal)->first()->direct_url);

        return view('edit', [
            'today_date' => $this->today_formatted,
            'time_now' => $this->now,
            'preg' => $fetch,
            'status' => $this->all_status,
            'portal' => $this->all_portals,
            'tags' => $tags_array,
            'tags_count' => $tags_count,
            'type' => $this->all_types,
            'direct_url' => $this->direct_url
        ]);
    }
    //#region

    //#region DATABASE OPERATIONS

    public function preg_create(Request $request)
    {
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
        $preg->budget = $request->budget ? 1 : 0;
        $preg->tags = $request->tags;
        $preg->save();

        return redirect('/create')->with('alert', 'Registro criado com sucesso!')->with('type', 'success')->with('aicon', 'check-circle');
    }

    public function preg_update(Request $request, $id)
    {
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
        $preg->budget = $request->budget ? 1 : 0;
        $preg->tags = $request->tags;
        $preg->save();

        $redirect_to = ($preg->budget == 1) ? 'budgets' : 'biddings';
        return redirect($redirect_to.'/list')->with('alert', 'Registro alterado com sucesso!')->with('type', 'success')->with('aicon', 'edit-3');
    }

    public function preg_delete($id)
    {
        $preg = Preg::where('id', $id)->first();
        $preg->delete();
        $redirect_to = ($preg->budget == 1) ? 'budgets' : 'biddings';
        return redirect($redirect_to.'/list')->with('alert', 'Registro deletado com sucesso!')->with('type', 'danger')->with('aicon', 'trash');
    }

    //#region
}
