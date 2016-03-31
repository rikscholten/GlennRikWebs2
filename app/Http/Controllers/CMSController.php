<?php namespace App\Http\Controllers;

use App\Product;
use App\Categoriee;
use Request;
use \DateTime;

class CMSController extends Controller
{

    public function indexBeheer(){
        $products['products'] = Product::get();
        $categorieen['categorieen'] = Categoriee::get();
        return view('cms.cms', $products, $categorieen);
    }

    public function createProductWindow()
    {
        $categorieen['categorieen'] = Categoriee::get();
        return view('cms.productCreate', $categorieen);
    }

    public function createProduct()
    {

        $id = \Auth::user()->id;

        $input = Request::all();

        if (!empty($input['product_naam'])) {
            $product = new Product();

            $product->naam = $input['product_naam'];
            $product->korte_beschrijving = $input['product_kortebeschrijving'];
            $product->beschrijving = $input['product_beschrijving'];
            $product->artiest = $input['product_artiestnaam'];
            $product->prijs = $input['product_prijs'];
            $product->image = $input['product_image'];
            $product->caterorie_id = $input['product_categorie_id'];
            $product->release_date = $input['product_release_date'];

            $dt = new DateTime();
            $dt->format('Y-m-d');

            $product->created_at = $dt;
            $product->updated_at = $dt;

            $product->save();
        } else {
            return back();
        }

        return redirect()->action('CMSController@indexBeheer');
    }

    public function editProductWindow($id)
    {
        $product['product'] = Product::findorfail($id);
        $categorieen['categorieen'] = Categoriee::get();
        return view('cms.productEdit', $categorieen, $product);
    }

    public function editProduct($id)
    {
        $product = Product::findorfail($id);

        $input = Request::all();

        $product->naam = $input['product_naam'];
        $product->korte_beschrijving = $input['product_kortebeschrijving'];
        $product->beschrijving = $input['product_beschrijving'];
        $product->artiest = $input['product_artiestnaam'];
        $product->prijs = $input['product_prijs'];
        $product->image = $input['product_image'];
        $product->caterorie_id = $input['product_categorie_id'];

        $dt = new DateTime();
        $dt->format('Y-m-d');

        $product->updated_at = $dt;

        $product->save();

        return redirect()->action('CMSController@indexBeheer');
    }

    public function deleteProduct($id)
    {
        $product = Product::findorfail($id);

        $product->delete();

        return redirect()->action('CMSController@indexBeheer');
    }

    public function createCategorieWindow()
    {
        $categorieenP['categorieen'] = Categoriee::get();
        return view('cms.categorieCreate', $categorieenP);
    }

    public function createCategorie()
    {

        $id = \Auth::user()->id;

        $input = Request::all();

        if (!empty($input['categorie_naam'])) {
            $categorie = new Categoriee();

            $categorie->naam = $input['categorie_naam'];
            $categorie->beschrijving = $input['categorie_beschrijving'];
            $categorie->parent_id = $input['categorie_parent_id'];

            $dt = new DateTime();
            $dt->format('Y-m-d');

            $categorie->created_at = $dt;
            $categorie->updated_at = $dt;

            $categorie->save();
        } else {
            return back();
        }

        return redirect()->action('CMSController@indexBeheer');
    }

    public function editCategorieWindow($id)
    {
        $categorie['categorie'] = Categoriee::findorfail($id);
        $categorieenP['categorieenP'] = Categoriee::get();
        return view('cms.categorieEdit', $categorie, $categorieenP);
    }

    public function editCategorie($id)
    {
        $categorie = Categoriee::findorfail($id);

        $input = Request::all();

        $categorie->naam = $input['categorie_naam'];
        $categorie->beschrijving = $input['categorie_beschrijving'];
        $categorie->parent_id = $input['categorie_parent_id'];

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

        return redirect()->action('CMSController@indexBeheer');
    }

}
