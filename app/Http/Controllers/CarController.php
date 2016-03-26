<?php
namespace App\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: Glenn
 * Date: 25-3-2016
 * Time: 14:28
 */

class CarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function car()
    {


        return view('car');
    }

    public function add_to_car($product)
    {
       // array_add(session('car', $product));

    }

}
?>
