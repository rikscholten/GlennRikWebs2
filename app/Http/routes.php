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
            $products = Product::where('id', '=', '2')->get();

            return view('welcome', ['products' => $products]);
        }
    });

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/blog', 'BlogController@blog');
    Route::get('/blog/add', 'BlogController@create_blog');


    Route::get('/car', 'CarController@car');
    Route::get('/car/add', 'CarController@add');
    Route::get('/car/dell', 'CarController@dell');


    Route::get('/home', 'HomeController@index');
    Route::get('/store', 'ProductController@store');
    Route::get('/product/{id?}', 'ProductController@product');

    Route::get('/cms', 'CMSController@indexBeheer');
    Route::get('/cms/productbeheer/create', 'CMSController@createProductWindow');
    Route::get('/cms/productbeheer/delete/{id?}', 'CMSController@deleteProduct');
    Route::get('/cms/productbeheer/edit', 'CMSController@editProductWindow');
    Route::get('/cms/productbeheer/editProduct/{id?}', 'CMSController@editProduct');
    Route::get('/cms/productbeheer/createProduct', 'CMSController@createProduct');

    Route::get('/cms/categoriebeheer/create', 'CMSController@createCategorieWindow');
    Route::get('/cms/categoriebeheer/delete/{id?}', 'CMSController@deleteCategorie');
    Route::get('/cms/categoriebeheer/edit', 'CMSController@editCategorieWindow');
    Route::get('/cms/categoriebeheer/editCategorie/{id?}', 'CMSController@editCategorie');
    Route::get('/cms/categoriebeheer/createCategorie', 'CMSController@createCategorie');

});







