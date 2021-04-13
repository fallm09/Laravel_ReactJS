<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Router;
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


//je veux une route qui va verifier les informations d'un user
//on va declare un objet(users)ajouter une priorite(user->name='fallmena09@gmail.com) v 
Route::get('/users' , 'TestController@getMethod') ;
Route::post('/users' , 'TestController@postMethod');




// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
