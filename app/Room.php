<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['number','status','checkin_date'];

    public function pay()
    {
        return $this->hasMany('App\Bill');
    }

    public function rentby()
    {
        return $this->belongsToMany('App\Client');
    }

    public function type()
    {
        return $this->belongsTo('App\RoomType');
    }

    public function dorm()
    {
        return $this->belongsTo('App\Dorm');
    }

    public function furniture()
    {
        return $this->hasMany('App\furniture');
    }
}
