<?php
//Route::group([
//    'middleware' => ['auth:api','admin'],
//    'namespace' => 'Admin',
//], function () {
//    Route::get('users', 'IndexController@index');
//});
Route::group(['middleware' => 'api','namespace' => 'Admin'],function (){
    Route::get('users', 'UserController@index');
});