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

Auth::routes();

/*
ADMIN LTE
 */
Route::get('/dashboard', function () {
    return view('adminlte');
});


/*
HOME CONTROLLER
 */
Route::get('/home', 'HomeController@index')->name('home');

/*
CATEGORY CONTROLLER
 */
Route::get('/category','Category\CategoryController@index')->name('category.index');
Route::get('/category/create','Category\CategoryController@create')->name('category.create');
Route::post('/category/create','Category\CategoryController@store')->name('category.store');
