<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    public function posts() {

        return $this->belongsToMany('App\Post');

    }


}
