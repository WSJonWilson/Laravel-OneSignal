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



    Route::get('/', [
        'uses' => 'PostController@getIndex',
        'as'  =>  'blog.index'

    ]);



    Route::get('/create', function () {
        return view ('frontend.blog.create');
    })->name('create');

      Route::post('/blog/post/create', [
        'uses' => 'PostController@postCreatePost',
        'as' => 'frontend.blog.post.create'
    ]);

    });
