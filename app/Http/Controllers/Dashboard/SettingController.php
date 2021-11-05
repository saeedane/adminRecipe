<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
use Illuminate\Support\Facades\DB;
use Validator;

class SettingController extends Controller
{
    //function return view setting create

    public function create(){

        $settings = Setting::all();
        return view('dashboard.setting.create',compact('settings'));
    } // end of function 



    public function update(Request $request){

        $validator = Validator::make($request->all(),[
           'name_app' => 'required',
              'api_key' => 'required',
              'content' =>'required|min:10|max:500',
              'more_apps_url'=> 'required',
              'facebook_url'=> 'required',
              'youtube_url'=> 'required',
              'instagram_url' => 'required',
        ]);

        if(!$validator->passes()){
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
        }else{

            $setting = DB::table('settings')
            ->update([
              'app_name' => $request->name_app,
              'app_key' => $request->api_key,
              'privacy_policy' => $request->content,
              'more_app'=> $request->more_apps_url,
              'facebook_url'=> $request->facebook_url,
              'youtube_url'=> $request->youtube_url,
              'Instagram_url' => $request->instagram_url,
      

            ]);


            if( $setting ){
                return response()->json(['status'=> 1, 'msg'=>'Update Setting has been successfully registered']);
            }
    

        }
      
      

  

      
        
       

    }

 

}
