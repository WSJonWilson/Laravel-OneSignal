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

Route::group(['middleware' => ['web']], function() {

    //index
    Route::get('/', [
        'uses' => 'PostController@getIndex',
        'as'  =>  'blog.index'

    ]);

    Route::get('/blog/routes', [
        'uses' => 'RouteController@getRouteIndex',
        'as' => 'blog.routes'
    ]);


    Route::get('/create', [
        'uses' => 'PostController@getRouteData',
        'as' => 'frontend.blog.create'
    ]);




    //simple navigations
    Route::get('/data', 'PostController@getData');

    Route::get('/blog/route/create', function () {
        return view ('frontend.blog.create_route');
    })->name('create.route');



// Controller functions & navigations
      Route::post('/blog/post/create', [
        'uses' => 'PostController@postCreatePost',
        'as' => 'frontend.blog.post.create'
    ]);


    Route::post('/blog/route/create_route', [
        'uses' => 'RouteController@postCreateRoute',
        'as' => 'frontend.blog.route.create'
    ]);

    });
