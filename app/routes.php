<?php

Route::get('/', 'HomeController@index');
Route::get('logIn', 'HomeController@login');
Route::post('logIn','HomeController@validate_phone');
Route::get('logout', 'HomeController@logout');
Route::post('index', 'HomeController@validate');

Route::group(array('prefix' => 'user'), function()
{
    Route::get('getList', 'UserController@index');
    Route::get('dtList', 'UserController@users_list');
    Route::get('edit', 'UserController@edit');
    Route::get('create', 'UserController@create');

    Route::post('edit', 'UserController@edit');
    Route::post('create', 'UserController@create');
    Route::post('delete', 'UserController@delete');
});

Route::group(array('prefix' => 'formulario'), function()
{
    Route::get('create', 'FormularioController@create');
    Route::post('guardar', 'FormularioController@guardar');
});


Route::get('test',  function(){
//u889195858_nelug 	u889195858_nelug 	mysql.hostinger.es 	0.02
});
