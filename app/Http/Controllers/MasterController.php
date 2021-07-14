<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MasterController extends Controller
{
    public function index(){
        $featuredlist = DB::table('acms_real_estate_lists')
                            ->where('rel_featured', '=', '1')
                            ->orderby('rel_id', 'desc')
                            ->get();

        $propertylist = DB::table('acms_real_estate_lists')
                            ->orderby('rel_id', 'desc')
                            ->paginate(6);
                            
        $data = array(
                    'featuredlist' => $featuredlist,
                    'propertylist' => $propertylist,
                    'pageTitle' => 'Maqura Realty - Houses, Apartments, Lands and Office Spaces in Ghana',
                    'pageDescription' => 'Premier real estate agency and property managers in Accra, Ghana',
                    'pageKeywords' => 'real estate agency, house for sale, house for rent, property for sale, property for rent, real estate agents, real estate brokers, real estate, property management, property managers, land for sale'
                );

    	return view('welcome')->with($data);
    }


    public function aboutUs(){
        $data = array(
                    'pageTitle' => 'About Us - Maqura Realty',
                    'pageDescription' => 'Premier real estate agency and property managers in Accra, Ghana',
                    'pageKeywords' => 'about Maqura Realty, real estate agents, real estate agency, property managers, property management, property managers, property management, real estate brokers, real estate brokerage'
                );
    	return view('about_us.about')->with($data);
    }


    public function propertyManagement(){
        $data = array(
                    'pageTitle' => 'Property Management Services - Maqura Realty',
                    'pageDescription' => 'Premier property managers and real estate agency in Accra, Ghana',
                    'pageKeywords' => 'property management, property managers, property managers, property management, real estate agents, real estate agency'
                );
        return view('property_management.property_man')->with($data);
    }



/*
    public function ourServices(){
        return view('services/services');
    }



    public function processFeedback(){
    	return view('contact/process_feedback_form');
    }
    */
}
