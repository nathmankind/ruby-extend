<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    public function fullname(){

        return $this->firstName.' '.$this->lastName;

    }
}
