<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        session(['car' => new \ArrayObject()]);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->middleware('auth');

        return view('home', ['sessionName' => session('naam')]);
    }
    public function blog()
    {
        $data['blogs']= Blog::get();
        return view('blog', $data);
    }

    public function create_blog(Request $request)
    {
        $blog = new Blog();
        $blog->naam = $request->input('naam');
        $blog->onderwerp = $request->input('onderwerp');
        $blog->text = $request->input('text');
        $blog->aantal_uur = $request->input('uren');
$blog->save();

        $data['blogs']= Blog::get();
        return view('blog', $data);

    }


}
