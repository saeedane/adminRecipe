<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Chef;
use Validator;
use App\Http\Traits\TraitFileUpload;

class ChefsController extends Controller
{
    use TraitFileUpload;

    //return view show chefs 
    public function index(){

        $chefs = Chef::paginate('5');
        return view('dashboard.chefs.show',compact('chefs'));
    }// end of function 


    // function store and validate 
    public function store(Request $request){

        $validator = Validator::make($request->all(),[
     
            //  validate data 'username','avater', 'email','gender','password','facebook_url','youtube_url','instagram_url'

            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'gender' => 'required',

        
    
        ]);
    
        if(!$validator->passes()){
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
        }else{

            $chef = new Chef();

            if($request->hasFile('avatar_url')){
                $storeFile = $this->saveFiles($request->avatar_url, 'chefs');
                $chef->avater = $storeFile;

            }

            $chef->username = $request->username;
            $chef->email = $request->email;
            $chef->email = $request->email;
            $chef->about = $request->about;
            $chef->password = $request->password;
            $chef->gender = $request->gender;
            $chef->facebook_url = $request->facebook_url;
            $chef->youtube_url = $request->youtube_url;
            $chef->instagram_url = $request->instagram_url;

            $chef->save();

       
    

        if($chef){
          return response()->json(['status'=> 1, 'msg'=>'New Chef has been successfully registered']);
    
        }
    
    

    }// end of function 
}
}