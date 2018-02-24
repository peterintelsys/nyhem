<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    //
    public function houses()
    {
        return $this->hasMany('App\House');
    }

    public function areas()
    {
        return $this->hasMany('App\Area');
    }

    public function photos()
    {
        return $this->hasMany('App\StreetPhoto');
    }
}
