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
Route::get('recipe/show', 'RecipeController@index')->name('recipe.show');
Route::post('recipe/store', 'RecipeController@store')->name('recipe.ajax');
Route::get('recipe/edit/{recipes}', 'RecipeController@edit')->name('recipe.edit');

// route slider recipe 
Route::get('slider/show','SliderController@index')->name("slider.show");
Route::post('slider/store','SliderController@store')->name("slider.store");

// route  users 
Route::get('users/create', 'UserController@create')->name('users.create');
Route::post('users/store', 'UserController@store')->name('users.store');
Route::get('users/show', 'UserController@index')->name('users.show');
Route::get('setting/create', 'SettingController@create')->name('setting.create');
Route::post('setting/update', 'SettingController@update')->name('setting.update');
// route cuisine 
Route::get('cuisine/show','CuisinesController@index')->name('cuisine.show');
Route::post('cuisine/store','CuisinesController@store')->name('cuisine.store');

// route ads 
Route::get('ads/create', 'AdsController@create')->name('ads.create');
Route::post('ads/update', 'AdsController@update')->name('ads.update');
// route chefs 
Route::get('chefs/show', 'ChefsController@index')->name('chefs.show');
Route::post('chefs/store', 'ChefsController@store')->name('chefs.store');


 });

    