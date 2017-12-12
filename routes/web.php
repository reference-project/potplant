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

Route::group(['prefix' => 'home', 'namespace' => 'Home'], function() {
    // 前端路由
    Route::get('plant', 'IndexController@getPlant');
    Route::get('operate', 'IndexController@getOperate');
});
