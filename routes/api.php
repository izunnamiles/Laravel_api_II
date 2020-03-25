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



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register', 'API\RegisterController@register');
Route::post('login', 'API\RegisterController@login');

Route::group(['prefix' => 'discussion'],function(){
    Route::apiResource('/{discussion}/comments','CommentController');
    Route::apiResource('/{discussion}/discussion_group','DiscussionGroupController');
    Route::apiResource('/{discussion}/answer','ResultOptionController');

});


Route::group(['prefix'=>'user'], function(){
    Route::apiResource('{user}/discussion','DiscussionController');
    Route::apiResource('{user}/wallet','WalletController');
    Route::apiResource('{user}/transaction','TransactionController');
    Route::apiResource('{user}/report','ReportController');
    Route::apiResource('{user}/contacts','ContactController');
    Route::apiResource('{user}/invite','InviteFriendController');
});