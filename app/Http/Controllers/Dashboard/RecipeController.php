<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
   // show view create recipe 

	public function create(){
      return view('dashboard.recipe.create');

	}//end of function 



}
