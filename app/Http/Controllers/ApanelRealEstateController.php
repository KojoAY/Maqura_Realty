<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use Image;

class ApanelRealEstateController extends Controller
{
    //
    public function index()
    {}
    	
    public function propertyList(){
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


    public function propertyDetails($refID){

        if (Session::has("AdminName")) {
    		$propertylist = DB::table('acms_real_estate_lists')
                ->select('*')
                ->where('rel_ref_id', '=', $refID)
                ->first();


            /*
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
            }*/

    	    $data = array(
                    'refID' => $propertylist,
                );

    	    return view('apanel.real_estate.re_view_details')->with($data);
        } else {
            return view('apanel.home');
        }
	}


    public function showAddNew(){
        if (Session::has("AdminName")) {
            // get the list of category
            $getMainCategories = DB::table('acms_real_estate_category')
                ->select('*')
                ->get();

            // get the list of currency
            $getCurrencies = DB::table('acms_currencies')
                ->select('*')
                ->get();

            // get the list of region
            $getRegions = DB::table('acms_regions')
                ->select('*')
                ->get();

            $data = array(
                'getMainCategories' => $getMainCategories,
                'getCurrencies' => $getCurrencies,
                'getRegions' => $getRegions
            );

            return view('apanel.real_estate.re_add_new')->with($data);
        } else {
            return view('apanel.home');
        }
    }


    public function saveAddNew(Request $request){
        $anRefID = $request->get('anRefID');
        $anCateg = $request->get('anCateg');
        $anStatus = $request->get('anStatus');
        $anCurr = $request->get('anCurr');
        $anPrice = $request->get('anPrice');
        $anBed = $request->get('anBed');
        $anBath = $request->get('anBath');
        $anGarage = $request->get('anGarage');
        $anGym = $request->get('anGym');
        $anPool = $request->get('anPool');
        $anRegion = $request->get('anRegion');
        $anTown = $request->get('anTown');
        $anAddress = $request->get('anAddress');
        $anDesc = $request->get('anDesc');
        $anFeat = (!empty($request->get('anFeat'))) ? $request->get('anFeat') : "0";
        $anVisible = $request->get('anVisible');
        //$anDefImg = $request->get('anDefImg');

        $imgName = explode('#imgHolder', $request->get('anDefImg'));
        $anDefImgAddress = implode('', $imgName);

        $defImgCnt = 0;

        $gather_photos = '';

        //$this->validate($request, [
        //    'anPhotos' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //]);

        if($request->hasFile('anPhotos')){
            foreach ($request->anPhotos as $photo) {

                $code = $anRefID . '_' . str_random(3) . '-' . rand(1111,9999);
                $photoName = $code . '.' . $photo->getClientOriginalExtension();
                
                $gather_photos .= $photoName . ' ';

                $destinationPath = public_path('photos/thumbs');
                $img = Image::make($photo->getRealPath());
                $img->resize(300, 300, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath.'/'.$photoName);


                $destinationPath = public_path('photos/originals');
                $photo->move($destinationPath, $photoName);

                if($anDefImgAddress == $defImgCnt){
                    $anDefImg = trim($photoName);
                }
                $defImgCnt++;
            }
        }


        DB::table('acms_real_estate_lists')
            ->insert([
                'rel_ref_id'        => $anRefID,
                'rel_category'      => $anCateg,
                'rel_status_type'   => $anStatus,
                'rel_featured'      => $anFeat,
                'rel_curr'          => $anCurr,
                'rel_price'         => $anPrice,
                'rel_bed'           => $anBed,
                'rel_bath'          => $anBath,
                'rel_garage'        => $anGarage,
                'rel_gym'           => $anGym,
                'rel_pool'          => $anPool,
                'rel_region'        => $anRegion,
                'rel_town'          => $anTown,
                'rel_address'       => $anAddress,
                'rel_description'   => $anDesc,
                'rel_photo_rep'     => $anDefImg,
                'rel_photos'        => trim($gather_photos),
                'rel_photos_folder' => '',
                'rel_visible'       => $anVisible
            ]);

        return redirect()->action("ApanelRealEstateController@propertyList"/*, ["rdir=". $fullURL]*/);
    }


    public function getEdit($refDB){
        return view('apanel.real_estate.re_edit')->with($data);
    }


    public function deleteDetails($refID){
        $propertylist = DB::table('acms_real_estate_lists')
                ->where('rel_ref_id', '=', $refID)
                ->delete();

        return redirect()->action("ApanelRealEstateController@propertyList");
    }
}
