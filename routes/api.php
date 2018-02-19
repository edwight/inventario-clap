<?php

use Illuminate\Http\Request;

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
header('Access-Control-Allow-Origin: http://localhost:8080/');
header('Access-Control-Allow-Credentials: true');


    Route::get('test1', function(){
        return response(['Product 1', 'Product 2', 'Product 3'],200);
        //   return '{agua:agua}';//Response::json('dato','dato');
    });

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
