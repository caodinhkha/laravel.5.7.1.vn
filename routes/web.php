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

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');*/
Route::group(config('module.auth.route'),function() {
    Auth::routes();
});
Route::group(config('module.frontend.route'),function(){
    //Dashboard
    Route::get('/','IndexController@index');
    //Dashboard
    Route::get('/posts','PostController@index');
});
Route::group(config('module.backend.route'),function(){
    //Dashboard
    Route::get('/','IndexController@index');
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('permissions','PermissionController');
    Route::resource('categories','CategoryController');
    Route::resource('posts', 'PostController');
});
