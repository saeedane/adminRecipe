<?php


Route::prefix('dashboard')
    ->name('dashboard.')
    ->middleware(['auth'])
    ->group(function () {


Route::get('/', 'welcomeController@index')->name('welcome');
// route category 
Route::get('category/create', 'CategoryController@create')->name('category.create');
Route::get('category/show', 'CategoryController@show')->name('category.show');
Route::post('category/store', 'CategoryController@store')->name('ajax');
// route recipe 
Route::get('recipe/create', 'RecipeController@create')->name('recipe.create');
// route create users 
Route::get('users/create', 'UserController@create')->name('users.create');
Route::post('users/store', 'UserController@store')->name('users.store');
Route::get('users/show', 'UserController@show')->name('users.show');



 });

    