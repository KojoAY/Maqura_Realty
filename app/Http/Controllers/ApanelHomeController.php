<?php

namespace App\Http\Controllers;
//namespace App\Http\Controllers\Apanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ApanelHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*
    public function __construct()
    {
        $this->middleware('apanel.auth');
    }
    */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Session::has("AdminName")) {
            $propList = DB::table('acms_real_estate_lists')
                ->select('*')
                ->orderby('rel_id', 'desc')
                ->paginate(15);
            
            $data = array(
                    'propertyList' => $propList,
                );

            return view('apanel.real_estate.re_list')->with($data);
        } else {
            return view('apanel.home');
        }
    }
}
