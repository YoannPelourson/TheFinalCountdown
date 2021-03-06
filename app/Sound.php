<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sound extends Model
{
    public function genre() {
        return $this->belongsToMany('App\Genre');
    }

    public function composer(){
        return $this->belongsTo('App\Composer');
    }
}
