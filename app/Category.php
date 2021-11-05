<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
        
    protected $fillable = [
        'name', 'photo', 'content','status'
    ];


      public function recipes()
    {
        return $this->belongsToMany(Recipe::class,'recipe_category','category_id');
    }

}
