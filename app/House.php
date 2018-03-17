<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    //
    public function street()
    {
        return $this->belongsTo('App\Street');
    }

    public function area()
    {
        return $this->belongsTo('App\Area');
    }

    public function events()
    {
        return $this->hasMany('App\Event');
    }
}
