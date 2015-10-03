<?php


Route::get('/',['as' => 'pages.home', 'uses' => 'PagesController@getHome']);

// Authentication routes...
Route::get('auth/login',['as' => 'auth.login','uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login',['as' => 'auth.login','uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout',['as' => 'auth.logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register',['as' => 'auth.register', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('auth/register',['as' => 'auth.register', 'uses' => 'Auth\AuthController@postRegister']);

// Password reset link request routes...
Route::get('password/email',['as' => 'password.email', 'uses' => 'Auth\PasswordController@getEmail']);
Route::post('password/email',['as' => 'password.email', 'uses' => 'Auth\PasswordController@postEmail']);

// Password reset routes...
Route::get('password/reset/{token}',['as' => 'password.reset','uses' => 'Auth\PasswordController@getReset']);
Route::post('password/reset',['as' => 'password.reset', 'uses' => 'Auth\PasswordController@postReset']);


// Dashboard routes...

Route::group(['prefix' => 'dashboard','as' => 'users.','middleware' => 'auth'],function()
{
    Route::get('/',['as' => 'dashboard','uses' => 'UsersController@getDashboard']);
});