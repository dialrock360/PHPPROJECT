<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonneSource extends Model
{
    //
    public function personnes(){
        $this->hasMany('App\Personne');
    }
}
