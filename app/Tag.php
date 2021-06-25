<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // RELAZIONE CON POST
    // tags-posts
    public function posts() {
        return $this->belongsToMany('App\Post');
    }
}
