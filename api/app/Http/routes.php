<?php


Route::get('/', function() {
    return view('welcome');
});

Route::group(['middleware' => 'cors'], function(){
    Route::post('/auth_login','AuthController@authenticate');
});

?>
