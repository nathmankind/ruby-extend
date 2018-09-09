<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    public function gallery(){
        return $this->hasMany('App\Gallery');
    }
}
