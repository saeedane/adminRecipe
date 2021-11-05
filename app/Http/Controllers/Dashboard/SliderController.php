<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;
use Validator;
use App\Http\Traits\TraitFileUpload;
class SliderController extends Controller
{
    use TraitFileUpload;


    //return view show slider 
    public function index(){
        $slider = Slider::paginate('2');

        return view('dashboard.slider.show',compact('slider'));
    }// end of function 



    // valide and store 
    public function store(Request $request){
        // validate request 

        $slider = new Slider;

        $validator = Validator::make($request->all(),[
              'title' => 'required',
              'review'=> 'required',
              'photo' => 'required|image|mimes:jpeg,png,jpg,gif',

          ]);

          if(!$validator->passes()){
              return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
          }else{
        

              $storeFile = $this->saveFiles($request->photo, 'slider');



        
              $slider->title =$request->title;
              $slider->photo = $storeFile;
              $slider->status =  $request->review;


              $slider->save();



              if( $slider ){
                  return response()->json(['status'=> 1, 'msg'=>'New Slider has been successfully registered']);
              }

            }

    }// end function 
}
