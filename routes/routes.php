<?php


Route::get('/home',"App\controllers\HomeController@index");
Route::get('/home/article/{id}','App\controllers\HomeController@singleArticleShow');
Route::get('/home/category/{id}','App\controllers\HomeController@categoryFullPage');


Route::get('/dashboard','App\controllers\DashboardController@index');

Route::get('/login','App\controllers\LoginController@index');
Route::post('/login','App\controllers\LoginController@login');










//Articles
Route::get('/dashboard/articles','App\controllers\ArticleController@index');
Route::get('/dashboard/articles/create','App\controllers\ArticleController@create');


Route::post('/dashboard/articles/store','App\controllers\ArticleController@store');
Route::get('/dashboard/articles/delete/{id}','App\controllers\ArticleController@delete');

Route::get('/dashboard/articles/edit/{id}','App\controllers\ArticleController@edit');
Route::post('/dashboard/articles/update','App\controllers\ArticleController@update');


//Categories
Route::get('/dashboard/categories','App\controllers\CategoryController@index');
Route::get('/dashboard/categories/create','App\controllers\CategoryController@create');


Route::post('/dashboard/categories/store','App\controllers\CategoryController@store');
Route::get('/dashboard/categories/delete/{id}','App\controllers\CategoryController@delete');

Route::get('/dashboard/categories/edit/{id}','App\controllers\CategoryController@edit');
Route::post('/dashboard/categories/update','App\controllers\CategoryController@update');



//Users
Route::get('/dashboard/users','App\controllers\UserController@index');
Route::get('/dashboard/users/create','App\controllers\UserController@create');


Route::post('/dashboard/users/store','App\controllers\UserController@store');
Route::get('/dashboard/users/delete/{id}','App\controllers\UserController@delete');

Route::get('/dashboard/users/edit/{id}','App\controllers\UserController@edit');
Route::post('/dashboard/users/update','App\controllers\UserController@update');







