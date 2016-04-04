<?php namespace App\Http\Controllers;
use Symfony\Component\Console\Input;
use Dotenv\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\Request;
use Symfony\Component\HttpFoundation\Session\Session;
class ApplyController extends Controller {
 public  function getForm(){
     return view('upload_image_form');

 }
}