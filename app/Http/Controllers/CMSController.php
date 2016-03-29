<?php namespace App\Http\Controllers;

use App\Product;

class ProductController extends Controller
{

    public function indexBeheer(){
        $data['products'] = Product::get();;
        return view('store', $data);
    }

    public function create()
    {
        return view('productCreate');
    }

    public function createProduct()
    {

        $id = \Auth::user()->id;

        $input = Request::all();

        if (!empty($input['product_name'])) {
            $product = new Product();

            $product->naam = $input['product_naam'];
            $product->korte_beschrijving = $input['product_kortebeschrijving'];
            $product->beschrijving = $input['product_beschrijving'];
            $product->artiest = $input['product_artiestnaam'];
            $product->prijs = $input['prijs'];

            $dt = new DateTime();
            $dt->format('Y-m-d');

            $product->created_at = $dt;
            $product->updated_at = $dt;

            $product->save();
        } else {
            return back();
        }

        return redirect()->action('ProductBeheerController@indexbeheer');
    }

    public function deleteProduct($id)
    {
        $product = wish::findorfail($id);

        $product->delete();

        return redirect()->action('ProductBeheerController@indexbeheer');
    }


}
