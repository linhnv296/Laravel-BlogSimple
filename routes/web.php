<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function (){
    Route::get('/',function (){
        return view('admin.index');
    });

    Route::prefix('categories')->group(function (){
        Route::get('/','BECategoryController@list')->name('BECategory.list');
        Route::get('/{id}/detail','BECategoryController@detail')->name('BECategory.detail');
        Route::get('/create','BECategoryController@create')->name('BECategory.create');
        Route::post('/create','BECategoryController@store')->name('BECategory.store');
        Route::get('/{id}/delete','BECategoryController@delete')->name('BECategory.delete');
        Route::get('/{id}/edit','BECategoryController@edit')->name('BECategory.edit');
        Route::post('/{id}/update','BECategoryController@update')->name('BECategory.update');

    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
