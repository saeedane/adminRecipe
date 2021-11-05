<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

use Validator;
class UserController extends Controller
{



    // function return view users 
    public function index(){
      $users = User::paginate(5);
      return view('dashboard.users.show',compact('users'));
    }// end of function 


    // function store and validate 
    public function store(Request $request){
      $validator = Validator::make($request->all(),[
     
     
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
     
    

    ]);

    if(!$validator->passes()){
        return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
    }else{

      $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,
    ]);


    if($user){
      return response()->json(['status'=> 1, 'msg'=>'New User has been successfully registered']);

    }



    }
    	
    }// end of function 


}
