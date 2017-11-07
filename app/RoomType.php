<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    public function has()
    {
        return $this->hasMany('App\Room');
    }
}
