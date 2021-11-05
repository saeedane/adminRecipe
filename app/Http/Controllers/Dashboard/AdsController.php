<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sellad;

use Validator;
use Illuminate\Support\Facades\DB;
class AdsController extends Controller
{
    //return view create ads 
    public function create(){
        $sellad = Sellad::all();
        return view('dashboard.ads.create',compact('sellad'));
    }// end of function 


    // function update 
    public function update(Request $request){

        $validator = Validator::make($request->all(),[
            'admob_native' => 'required|max:38',
               'admob_interstitial' => 'required|max:38',
               'admob_banner' =>'required|max:38',
               'admob_video'=> 'required|max:38',
          
         ]);
 
         if(!$validator->passes()){
             return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
         }else{
 
             $setting = DB::table('sellads')
             ->update([
               'admob_native' => $request->admob_native,
               'admob_interstitial' => $request->admob_interstitial,
               'admob_banner' => $request->admob_banner,
               'admob_video'=> $request->admob_video,
            
       
 
             ]);
 
 
             if( $setting ){
                 return response()->json(['status'=> 1, 'msg'=>'Update Ads has been successfully registered']);
             }
     
        
    }// end of fusnction 
}

}
