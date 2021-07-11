<?php


Route::get('/home',"App\controllers\HomeController@index");
Route::get('/dashboard','DashbaordController@index');


Route::get('/home/category/{name}','DashboardController@showFullCategory');
Route::get('/home/category/{id}','DashboardController@showOnePost');








Route::get('/dashboard/articles','ArticleController@index');
Route::get('/dashboard/articles/create','ArticleController@create');


Route::post('/dashboard/articles/store','ArticleController@store');
Route::post('/dashboard/articles/delete','ArticleController@delete');

Route::get('/dashboard/articles/edit/{id}','ArticleController@edit');
Route::get('/dashboard/articles/update/{id}','ArticleController@update');


//Categories
Route::get('/dashboard/categories','App\controllers\CategoryController@index');
Route::get('/dashboard/categories/create','ArticleController@create');


Route::post('/dashboard/categories/store','CategoryController@store');
Route::post('/dashboard/categories/delete','CategoryController@delete');

Route::get('/dashboard/categories/edit/{id}','CategoryController@edit');
Route::get('/dashboard/categories/update/{id}','CategoryController@update');



//Users
Route::get('/dashboard/users','UserController@index');
Route::get('/dashboard/users/create','UserController@create');


Route::post('/dashboard/users/store','UserController@store');
Route::post('/dashboard/users/delete','UserController@delete');

Route::get('/dashboard/users/edit/{id}','UserController@edit');
Route::get('/dashboard/users/update/{id}','UserController@update');







