<?php

namespace App\Http\Controllers\Api\Resc; 
   use App\Http\Requests\ProductRequest;
   use App\Http\Resources\ProductCollection;
   use App\Http\Resources\ProductResource;
   use App\Entities\Product;
   use Illuminate\Http\Request;
   use Illuminate\Support\Facades\Auth;
   use Symfony\Component\HttpFoundation\Response;
   use App\Http\Controllers\Api\BaseController as BaseController;
   
   class ProductController extends BaseController
   {   
        public function liste()
        {
            return   Product::all('id', 'name', 'detail', 'price', 'stock', 'discount')->sortBy("name");
          //  return Product::all();
        }

        public function show(Product $product)
        {
            return $product;
        }

        public function get($id)
        {
            return Product::findOrFail($id);
        }

        public function add(Request $request)
        {
            $product = new Product;
          $product->name = $request->name;
          $product->detail = $request->description;
          $product->price = $request->price;
          $product->stock = $request->stock;
          $product->discount = $request->discount;
          $product->user_id =  Auth::user()['id'];
          $product = Product::create($request->all());

            return response()->json(  $product , 201);
        }

       
        public function update(Request $request)
        {
            $product = Product::findOrFail($request->id);
             $product->update($request->all());
    
            return $product;
        }

     
        public function delete($id)
        {
            $product = Product::findOrFail($id);
            $product->delete();
    
            return 204;
        }
   
      
   }
   
   