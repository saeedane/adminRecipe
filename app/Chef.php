<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Recipe;
class Chef extends Model
{

/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','avater', 'email','about','gender','password','facebook_url','youtube_url','instagram_url'
    ];


    // Relationships recipe 
    public function recipes(){
        return $this->BelongsToMany(Recipe::class,'table_recipe_chefs','chef_id');   
     }


}
