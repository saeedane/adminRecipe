<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cuisine;
use App\Category;
use App\Recipe;


use Validator;
use App\Http\Traits\TraitFileUpload;
use Illuminate\Support\Facades\DB;

class RecipeController extends Controller
{
      use TraitFileUpload;



 


      // return view  Recipe index 
      public function index(){


            $recipes = Recipe::whenSearch(request()->search)->whenCategory(request()->category_id)->paginate(4);
            return view('dashboard.recipe.show',compact('recipes'));
      }

      // store view 

      public function store(Request $request){
        $recipe = new Recipe;

            $validator = Validator::make($request->all(),[
                  'title' => 'required'. $recipe->id,
                  'description' => 'required|min:10|max:500',
                  'time' => 'required ',
                  'servings'=>'required',
                  'category_id' => 'required',
                  'cuisine_id' => 'required',
                  'chef_id' => 'required',
                  'rating' => 'required',
                  'photo' => 'required|image|mimes:jpeg,png,jpg,gif',
                  'review'=> 'required'
    
              ]);
    
              if(!$validator->passes()){
                  return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
              }else{
            
    
                  $storeFile = $this->saveFiles($request->photo, 'recipe');

    

            
                  $recipe->title =$request->title;
                  $recipe->description  = $request->description;
                  $recipe->photo = $storeFile;
                  $recipe->time = $request->time;
                  $recipe->number_people = $request->servings;
                  $recipe->status =  $request->review;
                  $recipe->rating =  $request->rating;

                  if($request->youtube_url != null){
                    $recipe->youtube_url = $request->youtube_url;

                      $recipe->type =  'video';

                  }


                  $recipe->save();
                  $recipe->category()->attach($request->category_id);  
                  $recipe->cuisines()->attach($request->cuisine_id);  
                  $recipe->chefs()->attach($request->chef_id);  

    
                  if( $recipe ){
                      return response()->json(['status'=> 1, 'msg'=>'New Recipe has been successfully registered']);
                  }
              }
      }// end of function 


      // function return view edit 

      public function edit(Recipe $recipes){
          return view('dashboard.recipe.edit',compact('recipes'));
      }// end of function 



}
