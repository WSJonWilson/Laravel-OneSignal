<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    public function posts() {
        return $this->hasMany('App\Post', 'posts_routes');
    }



}
