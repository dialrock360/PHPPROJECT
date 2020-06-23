<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $fillable = [
        'name', 'detail', 'stock','price','discount'
    ];
    public function reviews()
    {
    	return $this->hasMany(Review::class);
    }
}
