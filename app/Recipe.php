<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cuisine;
use App\Chef;
class Recipe extends Model
{

/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "title", "description", "photo", "time", "number_people", "status", "youtube_url"
    ];

    
    // relationships 

   public function category()
    {
        return $this->belongsToMany(Category::class,'recipe_category','recipe_id');
    }



    public function cuisines(){
        return $this->belongsToMany(Cuisine::class,"cuisine_recipe",'recipe_id');   
     }


     
    public function chefs(){
        return $this->belongsToMany(Chef::class,"table_recipe_chefs",'recipe_id');   
     }


    //scopes --------------------------------------------------
    public function scopeWhenSearch($query, $search)
    {
        return $query->when($search, function ($q) use ($search) {
            return $q->where('title', 'like', "%$search%");
        });

    }// end of scopeWhenSearch

    public function scopeWhenCategory($query, $category)
    {
        return $query->when($category, function ($q) use ($category) {

            return $q->whereHas('category', function ($qu) use ($category) {

                return $qu->whereIn('category_id', (array)$category)
                    ->orWhereIn('name', (array)$category);

            });

        });

    }// end of scopeWhenCategory

}
