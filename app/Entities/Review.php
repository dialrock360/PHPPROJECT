<?php

namespace App\Entities;

use App\Entities\Product;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{   
	protected $fillable = [
        'customer', 'star', 'review','product_id'
    ];
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}