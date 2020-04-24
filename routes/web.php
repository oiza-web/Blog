<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', [
    'uses' => 'PostController@getIndex',
    'as' => 'index'
]);

Route::get('post/{id}', [
    'uses' => 'PostController@getPost',
    'as' => 'post'
]);

Route::get('about', function () {
    return view('about');
})->name('about');

 
    Route::get('indexa' ,[
        'uses' => 'PostController@getIndexa',
        'as' => 'indexa'
    ]);

    Route::get('create', [
        'uses' => 'PostController@getCreate',
        'as' => 'create'
    ]);

    Route::post('create', [
        'uses' => 'PostController@postCreate',
        'as' => 'create'
    ]);

    Route::get('edit/{id}', [
        'uses' => 'PostController@getEdit',
        'as' => 'edit'
    ]);

    // Route::post('edit/{id}', [
    //     'uses' => 'PostController@postUpdate',
    //     'as' => 'update'
    // ]);
    Route::post('/edit/{post_id}',  function(){
        dd('Oiza is a great developer o!');
      });
    
