<?php
namespace App\Http\Controllers;

use App\Categoriee;
use App\Product;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{

    public function store()
    {
        $data = ['products' => Product::where(function($query){
            $brands = Input::has('brands') ? Input::get('brands') : [];
            $artiests = Input::has('artiests') ? Input::get('artiests') : [];
            $max_price = Input::has('max_price') ? Input::get('max_price') : null;
            $min_price = Input::has('min_price') ? Input::get('min_price') : null;


            if(isset($min_price) && isset($max_price)){
                if(isset($brands)){
                    foreach ($brands as $brand) {
                        $query->orWhere('prijs','>=',$min_price);
                        $query->where('prijs','<=',$max_price);
                        $query->where('caterorie_id','=', $brand);

                    }
                }

                if(isset($artiests)){
                    foreach ($artiests as $artiest) {
                        $query->orWhere('prijs','>=',$min_price);
                        $query->where('prijs','<=',$max_price);
                        $query->where('artiest','=', $artiest);
                    }
                }
                $query-> where('prijs','>=',$min_price);
                $query-> where('prijs','<=',$max_price);
            }

        })->get()];

        //gets all the products out of the database and gives it to view

        return view('store', $data);
    }


    public function product($id)
    {
        //finds product wit given id and gives it with the view
        $data = ['product' => Product::find($id)];

        return view('product', $data);
    }


}