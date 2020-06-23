<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    //
   
    protected $fillable = [
        'nom_personne',
        'prenom_personne',
        'genre_personne',
        'date_naiss_personne',
        'lieu_naiss_personne',
        'nationalite_personne',
        'flag_personne',     
        'user_id',   
        'flag_personne',     
    ];

    public function source(){
        return $this->belongsTo('App\PersonneSource');
    }

    public function status(){
        return $this->belongsTo('App\PersonneStatus');
    }

    public function account(){
        return $this->belongsTo('App\Account');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function activities(){
        return $this->hasMany('App\Personne');
    }
}
