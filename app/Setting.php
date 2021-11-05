<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'app_name', 'app_key','privacy_Policy','more_app','facebook_url','facebook_url','youtube_url','Instagram_url'
    ];
 

}
