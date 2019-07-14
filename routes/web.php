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

Route::get('/', 'BlogController@list')->name('Blog.list');
Route::get('/{id}/detail', 'BlogController@detail')->name('Blog.detail');

Route::prefix('admin')->group(function (){
    Route::get('/',function (){
        return view('admin.index');
    })->middleware('auth')->name('BEAdmin');

    Route::prefix('categories')->group(function (){
        Route::get('/','BECategoryController@list')->name('BECategory.list');
        Route::get('/{id}/detail','BECategoryController@detail')->name('BECategory.detail');
        Route::get('/create','BECategoryController@create')->name('BECategory.create');
        Route::post('/create','BECategoryController@store')->name('BECategory.store');
        Route::get('/{id}/delete','BECategoryController@delete')->name('BECategory.delete');
        Route::get('/{id}/edit','BECategoryController@edit')->name('BECategory.edit');
        Route::post('/{id}/update','BECategoryController@update')->name('BECategory.update');
    });

    Route::prefix('blogs')->group(function (){
        Route::get('/','BEBlogController@list')->name('BEBlog.list');
        Route::get('/{id}/detail','BEBlogController@detail')->name('BEBlog.detail');
        Route::get('/create','BEBlogController@create')->name('BEBlog.create');
        Route::post('/create','BEBlogController@store')->name('BEBlog.store');
        Route::get('/{id}/delete','BEBlogController@delete')->name('BEBlog.delete');
        Route::get('/{id}/edit','BEBlogController@edit')->name('BEBlog.edit');
        Route::post('/{id}/update','BEBlogController@update')->name('BEBlog.update');

    });

    Route::prefix('pages')->group(function (){
        Route::get('/','BEPageController@list')->name('BEPage.list');
        Route::get('/{id}/detail','BEPageController@detail')->name('BEPage.detail');
        Route::get('/create','BEPageController@create')->name('BEPage.create');
        Route::post('/create','BEPageController@store')->name('BEPage.store');
        Route::get('/{id}/delete','BEPageController@delete')->name('BEPage.delete');
        Route::get('/{id}/edit','BEPageController@edit')->name('BEPage.edit');
        Route::post('/{id}/update','BEPageController@update')->name('BEPage.update');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'PageController@about')->name('Page.about');
Route::get('/contact', 'PageController@contact')->name('Page.contact');
Route::get('/blogpost', 'PageController@blogPost')->name('Page.blogpost');
Route::get('/{id}/blogpost', 'PageController@postByCate')->name('Page.postByCate');

Route::any('/ckfinder/examples/{example?}', 'CKSource\CKFinderBridge\Controller\CKFinderController@examplesAction')
    ->name('ckfinder_examples');