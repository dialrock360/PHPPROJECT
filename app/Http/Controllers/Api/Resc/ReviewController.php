<?php

namespace App\Http\Controllers\Api\Resc; 
   
use App\Http\Resources\ReviewResource;
use App\Entities\Review; 
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;

class ReviewController extends BaseController
{
     
    public function liste()
    {
        return Review::all();
    }

    public function show(Review $review)
    {
        return $review;
    }

    public function add(Request $request)
    {
        $review = new Review;
      $review->customer = $request->customer;
      $review->star = $request->star;
      $review->review = $request->review; 
      $review->product_id =  $request->product_id; 
      $review = Review::create($request->all());

        return response()->json(  $review , 201);
    }

   
   
    public function update(Request $request)
    {
        $review = Review::findOrFail($request->id);
         $review->update($request->all());

        return $product;
    }

  
    public function delete($id)
    {
        $product = Review::findOrFail($id);
        $product->delete();

        return 204;
    }
}