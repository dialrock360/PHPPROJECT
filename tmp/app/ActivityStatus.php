<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityStatus extends Model
{
    //
    public function activities(){
        return $this->hasMany('App\Activiy');
    }
}
