<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public function work()
    {
        return $this->belongsTo('App\Dorm');
    }
}
