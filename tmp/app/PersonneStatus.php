<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonneStatus extends Model
{
    //
    public function personnes(){
        $this->hasMany('App\Personne');
    }
}
