<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('lang/{language}', ['as' => 'langSet', 'uses' => 'PagesController@languageSet']);

Route::group(['prefix' => 'auth'], function() {
	Route::get('login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
	Route::post('login', ['as' => 'loginStore', 'uses' => 'Auth\AuthController@postLogin']);
	Route::get('register', ['as' => 'register', 'uses' => 'Auth\AuthController@getRegister']);
	Route::post('register', ['as' => 'registerStore', 'uses' => 'Auth\AuthController@postRegister']);
	Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
	Route::get('facebook', ['as' => 'loginFB', 'uses' => 'Auth\AuthController@redirectToProvider']);
	Route::get('facebook/callback', 'Auth\AuthController@handleProviderCallback');
});

Route::group(['prefix' => 'items'], function() {
	Route::get('/', ['as' => 'itemView', 'uses' => 'Items\ItemController@view']);
	Route::get('add', ['as' => 'itemAdd', 'uses' => 'Items\ItemController@add']);
	Route::post('/', ['as' => 'itemStore', 'uses' => 'Items\ItemController@store']);
});

Route::group(['prefix' => 'market'], function() {
	Route::get('/', ['as' => 'marketView', 'uses' => 'Market\MarketController@view']);
	Route::get('create', ['as' => 'marketCreate', 'uses' => 'Market\MarketController@create']);
	Route::post('/', ['as' => 'marketMake', 'uses' => 'Market\MarketController@make']);
});