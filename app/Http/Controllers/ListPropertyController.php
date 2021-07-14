<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ListPropertyController extends Controller
{
	public function index(){

		$propertylist = DB::table('acms_real_estate_lists')
                            ->orderby('rel_id', 'desc')
                            ->paginate(15);

        $townList = DB::table('acms_cities')
                        ->select('*')
                        ->orderby('citi_id', 'desc');
                            
		$data = array(
	                'propertylist' => $propertylist,
                    'pageTitle' => 'Houses, Apartments, Lands, Office Spaces for Sale or Rent in Ghana - Maqura Realty',
                    'pageDescription' => 'Houses, Apartments, Lands, Office Spaces for Sale or Rent in Ghana - Maqura Realty',
                    'pageKeywords' => 'house for sale, house for rent, land for sale, apartments for sale, apartments for rent, office space for rent, office space for sale'
	            );

		return view('properties.prop_list')->with($data);
	}



    public function listByCategory($categ){
    	switch ($categ) {
            case 'houses':
                $category = '1';
                break;
            case 'apartments':
                $category = '2';
                break;
            case 'office-spaces':
                $category = '3';
                break;
            case 'stores':
                $category = '4';
                break;
            case 'warehouses':
                $category = '5';
                break;
            case 'lands':
                $category = '6';
                break;
            
            default:
                $category = '';
                break;
        }

        $propertylist = DB::table('acms_real_estate_lists')
        				->select('*')
        				->where('rel_category', '=', $category)
                        ->orderby('rel_id', 'desc')
        				->paginate(15);
		
		$data = array(
                'categs' => $propertylist,
                'categName' => $categ,
                'pageTitle' => ucfirst($categ) . ' for Sale or Rent in Ghana - Maqura Realty',
                'pageDescription' => ucfirst($categ) . ' for Sale or Rent in Ghana',
                'pageKeywords' => $categ . ' for sale, ' . $categ . ' for rent, ' . $categ . ' for sale in ghana, ' . $categ . ' for rent in ghana'
            );

		return view('properties.prop_list_by_categ')->with($data);
    }



    public function listByStatus($categ, $stat){
    	switch ($categ) {
            case 'houses':
                $category = '1';
                break;
            case 'apartments':
                $category = '2';
                break;
            case 'office-spaces':
                $category = '3';
                break;
            case 'stores':
                $category = '4';
                break;
            case 'warehouses':
                $category = '5';
                break;
            case 'lands':
                $category = '6';
                break;
            
            default:
                $category = '';
                break;
        }

        switch ($stat) {
            case 'for-sale':
                $status = '1';
                break;
            case 'for-rent':
                $status = '2';
                break;
            
            default:
                $status = '';
                break;
        }


        $titleStat = explode('-', $stat);
        $titleStat = implode(' ', $titleStat);


    	$getProperties = DB::table('acms_real_estate_lists')
    						->select('*')
    						->where([
    							['rel_category', '=', $category],
    							['rel_status_type', '=', $status]
    						])
                            ->orderby('rel_id', 'desc')
                            ->paginate(15);

    	$data = array(
    				'getLists' => $getProperties,
                    'categName' => $categ,
                    'statType' => $stat,
                    'pageTitle' => ucwords($categ . ' ' . $titleStat) . ' in Ghana - Maqura Realty',
                    'pageDescription' => ucwords($categ . ' ' . $titleStat) . ' in Ghana',
                    'pageKeywords' => ucwords($categ . ' ' . $titleStat) . ', ' . ucwords($categ . ' ' . $titleStat) . ' in Ghana, ' . ucwords($categ . ' ' . $titleStat) . ' in Accra, ' . ucwords($categ . ' ' . $titleStat) . ' in East Legon, ' . ucwords($categ . ' ' . $titleStat) . ' in Airport, ' . ucwords($categ . ' ' . $titleStat) . ' in Spintex, ' . ucwords($categ . ' ' . $titleStat) . ' in Tema, ' . ucwords($categ . ' ' . $titleStat) . ' in Kasoa'
    			);

    	return view('properties.prop_list_by_categ_status')->with($data);
    }



	public function propertyDetails($categ, $stat, $refID){
		$propertylist = DB::table('acms_real_estate_lists')
                            ->select('*')
                            ->where('rel_ref_id', '=', $refID)
                            ->first();



        $category_arr = array('1' => 'house', '2' => 'apartment', '3' => 'office space', '4' => 'store', '5' => 'warehouse', '6' => 'land');
        $status_arr = array('1' => 'for sale', '2' => 'for rent');




        if($propertylist->rel_bed == 0){
            $propTitle = '';
            $specs = '
                    <article id="specs">
                        <i class="fa fa-bed"></i> 3
                        <span id="sep-h">|</span>
                        <i class="re re-bathroom"></i> 4
                    </article>';

        } else {
            $propTitle = $propertylist->rel_bed . ' bedroom';
            $specs = '<article id="specs">
                    <i class="fa fa-bed"></i> ' . $propertylist->rel_bed . '
                    <span id="sep-h">|</span>
                    <i class="re re-bathroom"></i> ' . $propertylist->rel_bath . '
                </article>';
        }




	    $data = array(
	                'refID' => $propertylist,
                    'pageTitle' => ucwords($propTitle .  ' ' . $category_arr[$propertylist->rel_category] . ' ' . $status_arr[$propertylist->rel_status_type]) . ' at ' . ucwords($propertylist->rel_address . ', ' . $propertylist->rel_town . ', Ghana - Maqura Realty'),
                    'pageDescription' => ucwords($propTitle .  ' ' . $category_arr[$propertylist->rel_category] . ' ' . $status_arr[$propertylist->rel_status_type]) . ' at ' . ucwords($propertylist->rel_address . ', ' . $propertylist->rel_town . ', Ghana'),
                    'pageKeywords' =>   $propTitle . ' ' . $category_arr[$propertylist->rel_category] . ' ' . $status_arr[$propertylist->rel_status_type] . ', ' . 
                                        $propTitle .  ' ' . $category_arr[$propertylist->rel_category] . ' ' . $status_arr[$propertylist->rel_status_type] . ' at ' . $propertylist->rel_town . ', ' . 
                                        $propTitle .  ' ' . $category_arr[$propertylist->rel_category] . ' in ' . $propertylist->rel_town . ', ' . 
                                        $propTitle .  ' ' . $category_arr[$propertylist->rel_category] . $status_arr[$propertylist->rel_status_type] . ' at ' . $propertylist->rel_town . ' Ghana, ' . 
                                        $propTitle .  ' ' . $category_arr[$propertylist->rel_category]
	            );

	    return view('properties.prop_details')->with($data);
	}








    // filter
    public function filterList(){

        switch ($_GET['fs']) {
            case 'For Sale':
                $status = '1';
                break;
            case 'For Rent':
                $status = '2';
                break;
            
            default:
                $status = '';
                break;
        }


        switch ($_GET['fc']) {
            case 'house':
                $category = '1';
                break;
            case 'apartment':
                $category = '2';
                break;
            case 'office space':
                $category = '3';
                break;
            case 'store':
                $category = '4';
                break;
            case 'warehouse':
                $category = '5';
                break;
            case 'land':
                $category = '6';
                break;
            
            default:
                $category = '';
                break;
        }


        switch ($_GET['fcur']) {
            case 'GHS':
                $curr = '1';
                break;
            case 'USD':
                $curr = '2';
                break;
            
            default:
                $curr = '';
                break;
        }


        $loc        = $_GET['fl'];
        $bed        = $_GET['fbd'];
        $bath       = $_GET['fbt'];

        $curr       = (!empty($_GET['fcur'])) ? $_GET['fcur'] : "GHS";
        $minPrice   = (!empty($_GET['fmnp'])) ? $_GET['fmnp'] : "0";
        $maxPrice   = (!empty($_GET['fmxp'])) ? $_GET['fmxp'] : "999999999";


        $filterList = DB::table('acms_real_estate_lists')
            ->select('*')

            ->when($status, function ($query) use ($status) {
                return $query->where('rel_status_type', $status);
            })

            ->when($category, function ($query) use ($category) {
                return $query->where('rel_category', $category);
            })

            ->when($loc, function ($query) use ($loc) {
                return $query->where('rel_town', 'LIKE', "%$loc%");
            })

            ->when($bed, function ($query) use ($bed) {
                return $query->where('rel_bed', $bed);
            })

            ->when($bath, function ($query) use ($bath) {
                return $query->where('rel_bath', '<=', $bath);
            })
/*
            ->when($curr, function ($query) use ($curr) {
                return $query->where('rel_curr', '=', $curr);
            })

            ->when($minPrice, function ($query) use ($minPrice) {
                return $query->where('rel_price', '>=', $minPrice);
            })
*/
            ->when($maxPrice, function ($query) use ($maxPrice) {
                return $query->where('rel_price', '<=', $maxPrice);
            })

            ->orderby('rel_id', 'desc')
            ->paginate(30);

        $data = array(
            'filterList' => $filterList,
            'pageTitle' => 'Real Estate Property For Sale and For Rent in Ghana - Maqura Realty',
            'pageDescription' => 'Real Estate Property For Sale and For Rent in Ghana',
            'pageKeywords' => 'house for sale, house for rent, land for sale, apartments for sale, apartments for rent, office space for rent, office space for sale'
        );

        return view('properties.prop_filter')->with($data);
    }
}
