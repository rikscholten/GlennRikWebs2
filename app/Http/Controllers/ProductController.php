<?php namespace App\Http\Controllers;

use App\Product;

class ProductController extends Controller {

    public function store()
    {


       // $data = ['products' => Product::all()];
        $product1 = new Product();
        $product1->id =1;
        $product1->artiest = 'Carl cox';
        $product1->korte_beschrijving = 'korte beschrijving';
        $product1->beschrijving = 'Lange beschrijving';
        $product1->categorie = 'techno';
        $product1->prijs = '12';
        $product1->release = '2012';
        $product1->naam = 'boiler room ';

        $product2 = new Product();
        $product2->id =1;
        $product2->artiest = 'hoi cox';
        $product2->korte_beschrijving = 'korte beschrijving';
        $product2->beschrijving = 'Lange beschrijving';
        $product2->categorie = 'techno';
        $product2->prijs = '12';
        $product2->release = '2012';
        $product2->naam = 'boiler room ';

        $products = array($product1,$product2);
        $data['products'] = $products;
        return view('store', $data);
    }

    public function product($id)
    {
       // $data = ['product' => Product::find($id)];

        $product1 = new Product();
        $product1->id =1;
        $product1->artiest = 'Carl cox';
        $product1->korte_beschrijving = 'korte beschrijving';
        $product1->beschrijving = 'Lange beschrijving';
        $product1->categorie = 'techno';
        $product1->prijs = '12';
        $product1->release = '2012';
        $product1->naam = 'boiler room ';

        $product2 = new Product();
        $product2->id =2;
        $product2->artiest = 'hoi cox';
        $product2->korte_beschrijving = 'korte beschrijving';
        $product2->beschrijving = 'Lange beschrijving';
        $product2->categorie = 'techno';
        $product2->prijs = '12';
        $product2->release = '2012';
        $product2->naam = 'boiler room ';
        $products = array($product1,$product2);
        $data['products'] = $product1;
        $pro['product'] = $product1 ;
      //  $data = ['product' => $data['products']::find($id) ];


        return view('product', $pro);
    }

    public function car(){

        return view('winkel_wagen');
    }

    public function add_to_car($product){


    }



}
