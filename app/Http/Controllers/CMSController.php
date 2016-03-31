<?php namespace App\Http\Controllers;

use App\Product;
use App\Categoriee;

class CMSController extends Controller
{

    public function indexBeheer(){
        $products['products'] = Product::get();
        $categorieen['categorieen'] = Categoriee::get();
        return view('cms.cms', $products, $categorieen);
    }

    public function createProductWindow()
    {
        return view('cms.productCreate');
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
            $product->prijs = $input['product_prijs'];

            $dt = new DateTime();
            $dt->format('Y-m-d');

            $product->created_at = $dt;
            $product->updated_at = $dt;

            $product->save();
        } else {
            return back();
        }

        return redirect()->action('CMSController@indexbeheer');
    }

    public function editProductWindow()
    {
        return view('cms.productEdit');
    }

    public function editProduct($id)
    {
        $product = Product::findorfail($id);

        $input = Request::all();

        $product->naam = $input['product_naam'];
        $product->description = $input['product_kortebeschrijving'];
        $product->beschrijving = $input['product_beschrijving'];
        $product->artiest = $input['product_artiestnaam'];
        $product->prijs = $input['product_prijs'];

        $dt = new DateTime();
        $dt->format('Y-m-d');

        $product->updated_at = $dt;

        $product->save();

        return back();
    }

    public function deleteProduct($id)
    {
        $product = Product::findorfail($id);

        $product->delete();

        return redirect()->action('CMSController@indexbeheer');
    }

    public function createCategorieWindow()
    {
        return view('cms.categorieCreate');
    }

    public function createCategorie()
    {

        $id = \Auth::user()->id;

        $input = Request::all();

        if (!empty($input['categorie_name'])) {
            $categorie = new Categoriee();

            $categorie->naam = $input['categorie_name'];
            $categorie->korte_beschrijving = $input['categorie_name'];
            $categorie->beschrijving = $input['categorie_name'];
            $categorie->artiest = $input['categorie_name'];
            $categorie->prijs = $input['categorie_name'];

            $dt = new DateTime();
            $dt->format('Y-m-d');

            $categorie->created_at = $dt;
            $categorie->updated_at = $dt;

            $categorie->save();
        } else {
            return back();
        }

        return redirect()->action('CMSController@indexbeheer');
    }

    public function editCategorie($id)
    {
        $categorie = Categoriee::findorfail($id);

        $input = Request::all();

        $categorie->naam = $input['product_naam'];
        $categorie->description = $input['product_kortebeschrijving'];
        $categorie->beschrijving = $input['product_beschrijving'];
        $categorie->artiest = $input['product_artiestnaam'];
        $categorie->prijs = $input['product_prijs'];

        $dt = new DateTime();
        $dt->format('Y-m-d');

        $categorie->updated_at = $dt;

        $categorie->save();

        return back();
    }

    public function deleteCategorie($id)
    {
        $categorie = Categoriee::findorfail($id);

        $categorie->delete();

        return redirect()->action('CMSController@indexbeheer');
    }

}
