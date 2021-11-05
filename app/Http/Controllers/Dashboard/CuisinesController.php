<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Cuisine;
use Illuminate\Support\Facades\DB;
use App\Http\Traits\TraitFileUpload;
class CuisinesController extends Controller
{
    use TraitFileUpload;




    // return view show cuisiene 
    public function index(){
        $cuisines = Cuisine::paginate(5);
        return view('dashboard.cuisine.show',compact('cuisines'));
    }// end of index 



    // function store 
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'cuisine_name'=>'required',
            'cuisine_photo' => 'required|image|mimes:jpeg,png,jpg,gif'

        ]);

        if(!$validator->passes()){
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
        }else{
      

            $storeFile = $this->saveFiles($request->cuisine_photo, 'cuisine');

             $values = [
                 'cuisine_name'=>$request->cuisine_name,
                 'cuisine_photo' =>$storeFile
            ];

            $query = DB::table('cuisines')->insert($values);
            if( $query ){
                return response()->json(['status'=>1, 'msg'=>'New Cuisine has been successfully registered']);
            }
        }
    }


}
