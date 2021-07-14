<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class ApanelUserController extends Controller
{
    //
    public function index(){
    	if (Session::has("AdminName")) {
	    	return view("apanel.real_estate.re_list");
	    } else {
	    	return view("apanel.home");
	    }
    }


    public function loginUser(Request $request)
    {
    	$apUsername = $request->get("apUsername");
    	$apPassword = $request->get("apPassword");

    	if(!empty($apUsername)){
    		echo "ok";
	    	$checkUser = DB::table('acms_users')
				->select('*')
	            ->where('us_username', '=', $apUsername)->first();

			if (($checkUser !== null) && ($checkUser->us_password == $apPassword)) {
				// set the following Sessions
	            Session::put("AdminName", $checkUser->us_name);
	            Session::put("Username", $checkUser->us_username);

	            return redirect()->action('ApanelRealEstateController@propertyList'); 
			} else {
				$errorMessage = "<label style=\"color: #c81111; text-align:center; margin-bottom:10px;\">
	                            Email address/password does not exit.
	                        </label>";

	            // assign error message
	            $request->session()->flash('errorMessage', $errorMessage);
	            // return to login page to login again
	            return redirect()->action('ApanelUserController@loginUser'/*, ['_err'=>$errorCount]*/); 
			}
		} else {
			return view("apanel.home");
		}
    }
}
