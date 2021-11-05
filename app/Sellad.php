<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sellad extends Model
{
 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "admob_native", "admob_interstitial", "admob_banner", "admob_video"
    ];



}
