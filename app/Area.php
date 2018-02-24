<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //
    public function street()
    {
        return $this->belongsTo('App\Street');
    }

    public function houses()
    {
        return $this->hasMany('App\House');
    }

    public function photos()
    {
        return $this->hasMany('App\AreaPhoto');
    }
}
