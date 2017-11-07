<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DormExpense extends Model
{
    public function fromdorm()
    {
        return $this->belongsTo('App\Dorm');
    }
}
