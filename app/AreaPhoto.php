<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreaPhoto extends Model
{
    public function area()
    {
        return $this->belongsTo('App\Area');
    }
}
