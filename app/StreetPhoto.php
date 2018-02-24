<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StreetPhoto extends Model
{
    //
    public function street()
    {
        return $this->belongsTo('App\Street');
    }
}
