<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Middleware\ApiKeyMiddleware;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/request', [ApiController::class, 'request'])->middleware(ApiKeyMiddleware::class)->name('api_request');

//Route::group(['middleware' => ['auth:api']], function(){
    
    //Route::post('request','ApiController@request')->name('request'); 
//});
