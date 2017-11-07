<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dorm extends Model
{

    public $incrementing = false;

    public function ownedby()
    {
        return $this->belongsTo('App\Owner');
    }

    public function collect()
    {
        return $this->hasMany('App\Bill');
    }

    public function expense()
    {
        return $this->hasMany('App\DormExpense');
    }

    public function furniture()
    {
        return $this->hasMany('App\Furniture');
    }

    public function room()
    {
        return $this->hasMany('App\Room');
    }

    public function staff()
    {
        return $this->hasMany('App\Staff');
    }
}
