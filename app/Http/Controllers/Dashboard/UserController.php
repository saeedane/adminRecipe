<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // function return view users 
    public function create(){
      return view('dashboard.users.create');
    }// end of function 

    public function store(){
    	
    }
}
