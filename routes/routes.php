<?php


Route::get('/home',"App\controllers\HomeController@index");
Route::get('/dashboard','App\controllers\DashboardController@index');


Route::get('/home/category/{name}','DashboardController@showFullCategory');
Route::get('/home/category/{id}','DashboardController@showOnePost');








Route::get('/dashboard/articles','App\controllers\ArticleController@index');
Route::get('/dashboard/articles/create','App\controllers\ArticleController@create');


Route::post('/dashboard/articles/store','App\controllers\ArticleController@store');
Route::post('/dashboard/articles/delete','App\controllers\ArticleController@delete');

Route::get('/dashboard/articles/edit/{id}','App\controllers\ArticleController@edit');
Route::get('/dashboard/articles/update/{id}','App\controllers\ArticleController@update');


//Categories
Route::get('/dashboard/categories','App\controllers\CategoryController@index');
Route::get('/dashboard/categories/create','App\controllers\ArticleController@create');


Route::post('/dashboard/categories/store','App\controllers\CategoryController@store');
Route::post('/dashboard/categories/delete','App\controllers\CategoryController@delete');

Route::get('/dashboard/categories/edit/{id}','App\controllers\CategoryController@edit');
Route::get('/dashboard/categories/update/{id}','App\controllers\CategoryController@update');



//Users
Route::get('/dashboard/users','App\controllers\UserController@index');
Route::get('/dashboard/users/create','App\controllers\UserController@create');


Route::post('/dashboard/users/store','App\controllers\UserController@store');
Route::post('/dashboard/users/delete','App\controllers\UserController@delete');

Route::get('/dashboard/users/edit/{id}','App\controllers\UserController@edit');
Route::post('/dashboard/users/update/{id}','App\controllers\UserController@update');







