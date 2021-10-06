<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Http\Traits\TraitFileUpload;

class CategoryController extends Controller
{

    use TraitFileUpload;

    public function create(){


      return view('dashboard.category.create');

    }


    public function store(Request $request){
        $validator = Validator::make($request->all(),[
              'name'=>'required',
              'content'=>'required|min:10|max:500',
              'photo' => 'required|image|mimes:jpeg,png,jpg,gif'

          ]);

          if(!$validator->passes()){
              return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
          }else{
        

              $storeFile = $this->saveFiles($request->photo, 'category');

               $values = [
                   'name'=>$request->name,
                   'content'=>$request->content,
                   'photo' =>$storeFile
              ];

              $query = DB::table('categories')->insert($values);
              if( $query ){
                  return response()->json(['status'=>1, 'msg'=>'New Category has been successfully registered']);
              }
          }
    }



    public function show(){

      $category = Category::paginate(1);

      return view('dashboard.category.show',compact('category'));
    }
    


 
}
