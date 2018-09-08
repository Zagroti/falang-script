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

Route::namespace('Api\V1')->prefix('/v1')->group(function () {

    //Auth otp
    Route::post('auth/otp/sms', 'Auth\ZamanakController@postSmsRequest');
    Route::post('auth/otp/call', 'Auth\ZamanakController@postCallRequest');
    Route::post('auth/otp/verify', 'Auth\ZamanakController@postVerifyRequest');


});