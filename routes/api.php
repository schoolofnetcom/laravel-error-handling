<?php

use App\Exceptions\MyCustomException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::resource('products', 'ProductController');
Route::resource('categories', 'ProductController');

Route::get('my-test', function(){
    throw new MyCustomException();
});

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
