<?php
namespace App\Http\Controllers;

use App\Product;

class ProductController extends Controller {

    public function store()
    {

        //gets all the products out of the database and gives it to view
        $data['products'] = Product::get();;
        return view('store', $data);
    }


    public function product($id)
    {
        //finds product wit given id and gives it with the view
        $data = ['product' => Product::find($id)];

        return view('product', $data);
    }




}
