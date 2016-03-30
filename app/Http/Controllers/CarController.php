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

        foreach(session('car') as $product){
            if($product->id == $id){
                $product->aantal++;
                return view('car');
            }

        }
$add = Product::find($id);
        $add->aantal++;
        session('car')->append($add);
        return view('car');

    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dell(Request $request)
    {

        $int = $request->input('id');
        $id = (int)$int;
        echo $id;

$counter = 0;

        foreach(session('car') as $product){
        if($product->id === $id && $product->aantal ==1){
            unset(session('car')[$counter]);
            break;
        }
            if($product->id === $id && $product->aantal > 1){
                $product->aantal--;
                break;
            }
$counter++;

        }

        return view('car');

    }


}
?>
