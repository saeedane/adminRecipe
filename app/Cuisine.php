<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Recipe;
class Cuisine extends Model
{

/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cuisine_name', 'cuisine_photo'
    ];


    // Relationships recipe 
    public function recipes(){
        return $this->BelongsToMany(Recipe::class,'cuisine_recipe','cuisine_id');   
     }

}
