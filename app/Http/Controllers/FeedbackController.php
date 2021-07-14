<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{
    //
    public function index(){
        $data = array(
            'pageTitle' => 'Contact Us - Maqura Realty',
            'pageDescription' => 'Talk to us here at Maqura Realty today!',
            'pageKeywords' => 'contact Maqura Realty, real estate agency, house for sale, house for rent, property for sale, property for rent, real estate agents, real estate brokers, real estate, property management, property managers, land for sale'
        );
    	return view('contact_us.contacts')->with($data);
    }



    public function saveFeedback(Request $request){
    	$fName = $request->get("fName");
    	$fTele = $request->get("fTele");
    	$fEmail = $request->get("fEmail");
    	$fMsg = $request->get("fMsg");
    	$sendDate = strtotime("now");

    	DB::table("acms_feedback")
    		->insert([
    			'fbk_name' => $fName,
    			'fbk_tele' => $fTele,
    			'fbk_email' => $fEmail,
    			'fbk_message' => $fMsg,
    			'fbk_sendDate' => $sendDate
    		]);

    	//return view('contact_us.contacts');
    	return redirect()->action('FeedbackController@index');
    }
}
