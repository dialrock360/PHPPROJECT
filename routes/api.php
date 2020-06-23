<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use   App\Entities\Product;
Use   App\Entities\Review;
use App\Entities\User; 


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

    Route::post('register', 'Api\Auth\AuthController@register');
    Route::post('login', 'Api\Auth\AuthController@login');
    
   /* Route::group(['middleware' => 'auth:api'], function(){
        Route::get('acount/show', 'Api\Auth\AuthController@userDetail');
        Route::post('acount/edit', 'Api\Auth\AuthController@updateUser');
        Route::post('logout', 'Api\Auth\AuthController@logout'); 

        Route::get('products', 'Api\Resc\ProductController@liste');
        Route::get('product/{id}', 'Api\Resc\ProductController@get');
        Route::post('product/add', 'Api\Resc\ProductController@store');
        Route::post('product/update', 'Api\Resc\ProductController@update');
        Route::get('product/delete/{id}', 'Api\Resc\ProductController@delete');
            
        Route::get('users', 'Api\Resc\UserController@liste');
        Route::get('user/{id}', 'Api\Resc\UserController@get');
        Route::post('user/add', 'Api\Resc\UserController@store');
        Route::post('user/update', 'Api\Resc\UserController@update');
        Route::get('user/delete/{id}', 'Api\Resc\UserController@delete');
 
        Route::get('reviews', 'Api\Resc\ReviewController@liste');
        Route::get('review/{id}', 'Api\Resc\ReviewController@get');
        Route::post('review/add', 'Api\Resc\ReviewController@store');
        Route::post('review/update', 'Api\Resc\ReviewController@update');
        Route::get('review/delete/{id}', 'Api\Resc\ReviewController@delete');
    
});*/
 
Route::group(['middleware' => 'auth:api'], function(){
    Route::get('acount/show', 'Api\Auth\AuthController@userDetail');
    Route::post('acount/edit', 'Api\Auth\AuthController@updateUser');
    Route::post('logout', 'Api\Auth\AuthController@logout'); 

    Route::get('products', 'Api\Resc\ProductController@liste');
    Route::get('product/{id}', 'Api\Resc\ProductController@get');
    Route::post('product/add', 'Api\Resc\ProductController@store');
    Route::post('product/update', 'Api\Resc\ProductController@update');
    Route::get('product/delete/{id}', 'Api\Resc\ProductController@delete');
        
    Route::get('users', 'Api\Resc\UserController@liste');
    Route::get('user/{id}', 'Api\Resc\UserController@get');
    Route::post('user/add', 'Api\Resc\UserController@store');
    Route::post('user/update', 'Api\Resc\UserController@update');
    Route::get('user/delete/{id}', 'Api\Resc\UserController@delete');

    Route::get('reviews', 'Api\Resc\ReviewController@liste');
    Route::get('review/{id}', 'Api\Resc\ReviewController@get');
    Route::post('review/add', 'Api\Resc\ReviewController@store');
    Route::post('review/update', 'Api\Resc\ReviewController@update');
    Route::get('review/delete/{id}', 'Api\Resc\ReviewController@delete');

});









































/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('articles', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Article::all();
});
 
Route::get('articles/{id}', function($id) {
    return Article::find($id);
});

Route::post('articles', function(Request $request) {
    return Article::create($request->all);
});

Route::put('articles/{id}', function(Request $request, $id) {
    $article = Article::findOrFail($id);
    $article->update($request->all());

    return $article;
});

 

Route::delete('articles/{id}', function($id) {
    Article::find($id)->delete();
    return 204;
});*/
/*
Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');
Route::group(['middleware' => 'auth:api'], function(){Route::post('details', 'API\UserController@details');});*/

  /*
Route::get('articles', 'Api\ArticleController@index');
Route::get('articles/{article}', 'Api\ArticleController@show');
Route::post('articles', 'Api\ArticleController@store');
Route::put('articles/{article}', 'Api\ArticleController@update');
Route::delete('articles/{article}', 'Api\ArticleController@delete');*/
//Route::get('getUser', 'Auth\AuthController@getUser');
/*
Route::post('register', 'Api\Auth\AuthController@register');
Route::post('login', 'Api\Auth\AuthController@login');
Route::middleware('auth:api')->group( function () {
    Route::resource('getUser', 'Api\Auth\AuthController@getUser');
});*/

/*
Route::prefix('ages')->group(function(){
    Route::post('login', 'Api\AuthController@login');
    Route::post('register', 'Api\AuthController@register');
    Route::group(['middleware' => 'auth:api'], function(){
    Route::post('getUser', 'Api\AuthController@getUser');
    });
   });

  

   Route::apiResource('/products','Api\ProductController');

   Route::group(['prefix' => 'products'],function(){
   
     Route::apiResource('/{product}/reviews','Api\ReviewController');
   
   });*/