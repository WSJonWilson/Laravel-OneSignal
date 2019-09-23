<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    // public function routes(){
    //     return $this->belongToMany('App\Route', 'posts_routes');
    // }

    public function routes(){
        return $this->belongsToMany('App\Route');
    }
}
