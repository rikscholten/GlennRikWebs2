<?php namespace App\Http\Controllers;

use App\Http\Requests;

use Request;
use \DateTime;
use App\Product;

class ProductBeheerController extends Controller {



    public function indexcrud(){
        $producten = Product::where('id', '>', '0')->get();

        return view('productenbeheer.productbeheer', ['producten' => $producten]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('productenbeheer.addProduct');
    }

    public function createProduct(){

        $id = \Auth::user()->id;

        $input = Request::all();

        if(!empty($input['product_name'])) {
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
        }

        else{
            return back();
        }

        return redirect()->action('ProductBeheerController@edit');
    }

    public function editProduct($id){
        $wish = wish::findorfail($id);

        $input = Request::all();

        $wish->wish_name = $input['wish_name'];
        $wish->description = $input['wish_description'];

        $wish->save();

        return back();
    }

    public function deleteProduct($id)
    {
        $wish = wish::findorfail($id);

        $tags = Wishes_has_tags::where('wishes_id', '=', 12);
        foreach ($tags as $tag){
            $tag->delete();
        }

        $wish->delete();

        return redirect()->action('ProductBeheerController@index');
    }
}
