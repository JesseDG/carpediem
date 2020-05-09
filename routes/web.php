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

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    Route::get('/{any}', function () { return view('spa');  })->where('any','.*'); 
});

Route::get('/authadmin',function(){ return view('auth/authadmin');} )->name('authadmin');

// Route to handle SPA
//Route::get('/{any}', 'SpaController@index')->where('any', '.*');


