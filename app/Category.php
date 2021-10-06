<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
        
    protected $fillable = [
        'name', 'photo', 'content','status'
    ];


      public function recipe()
    {
        return $this->hasMany(Recipe::class);
    }

}
