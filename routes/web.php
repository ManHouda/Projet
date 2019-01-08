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

Route::get('/index','IndexController@showIndex');
Route::get('/addBooks','AddBooksController@showAddBooks');
*/
Route::get('/','FrontController@authentication');
Auth::routes();

Route::group(['middleware'=>['web','auth']], function(){

    Route::get('/home', 'FrontController@index')->name('home');
    Route::post('/insert','AddController@Addbook');
    Route::get('/AddBook','AddController@rediriger');


});