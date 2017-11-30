<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public function own()
    {
        return $this->hasMany('App\Dorm','owner_ssn');
    }
}
