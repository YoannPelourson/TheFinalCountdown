<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function sound() {
        return $this->belongsToMany('App\Sound');
    }
}
