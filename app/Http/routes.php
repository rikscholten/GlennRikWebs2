<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Product;







/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        session(['naam' => 'mijn session']);

        try {
            Auth::user()->name;
            return view('home', ['sessionName' => session('naam')]);
        } catch (Exception $e) {
            return view('welcome');
        }
    });

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();


    Route::get('/car', 'CarController@car');
    Route::get('/car/add', 'CarController@add');
    Route::get('/car/dell', 'CarController@dell');


    Route::get('/home', 'HomeController@index');
    Route::get('/store', 'ProductController@store');
    Route::get('/product/{id?}', 'ProductController@product');
});






