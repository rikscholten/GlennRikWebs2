<?php
namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

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
    public function add(Request $request)
    {

        $int = $request->input('id');
        $id = (int)$int;

        session('car')->append(Product::find($id));
        return view('car');

    }

    public function dell(Request $request)
    {

        $int = $request->input('id');
        $id = (int)$int;
        $counter = 0;
        echo $id;
        unset(session('car')[$id]);

        return view('car');


    }


}
?>
