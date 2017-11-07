<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Furniture extends Model
{
    public function room()
    {
        return $this->belongsTo('App\Room');
    }

    public function dorm()
    {
        return $this->belongsTo('App\Dorm');
    }
}
