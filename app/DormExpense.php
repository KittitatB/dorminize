<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DormExpense extends Model
{
    protected $fillable = ['date','elec_cost','water_cost'];
    public function fromdorm()
    {
        return $this->belongsTo('App\Dorm');
    }
}
