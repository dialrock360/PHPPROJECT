<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Article;


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

Route::prefix('ages')->group(function(){
    Route::post('login', 'Auth\AuthController@login');
    Route::post('register', 'Auth\AuthController@register');
    Route::group(['middleware' => 'auth:api'], function(){
    Route::post('getUser', 'Auth\AuthController@getUser');
    });
   });

 
  
Route::get('articles', 'Api\ArticleController@index');
Route::get('articles/{article}', 'Api\ArticleController@show');
Route::post('articles', 'Api\ArticleController@store');
Route::put('articles/{article}', 'Api\ArticleController@update');
Route::delete('articles/{article}', 'Api\ArticleController@delete');
//Route::get('getUser', 'Auth\AuthController@getUser');

Route::post('register', 'Auth\AuthController@register');
Route::post('login', 'Auth\AuthController@login');
Route::middleware('auth:api')->group( function () {
    Route::resource('getUser', 'Auth\AuthController@getUser');
});
   
Route::middleware('auth:api')->group( function () {
    Route::resource('products', 'Api\ProductController');
});

Route::apiResource('/products','ProductController');

Route::group(['prefix' => 'products'],function(){

  Route::apiResource('/{product}/reviews','ReviewController');

});