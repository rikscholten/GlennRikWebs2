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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/store', function () {
    $product = new Product();
    $product->naam = "hello";
    $product->artiest ="adelle";
    $product->beschrijving ="dit is een numer";
    $product->korte_beschrijving = "korte bes";
    $product->categorie = "muziek";
    $product->prijs = 12;
    $data['products'] = $product;
    return view('store',$data);
});


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
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});


