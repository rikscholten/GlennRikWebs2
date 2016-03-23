<?php
/**
 * Created by PhpStorm.
 * User: Glenn
 * Date: 23-3-2016
 * Time: 11:56
 *
 */
namespace App;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    //propeties
    public $id;
    public $naam ;
    public $artiest;
    public $categorie;
    public $release;
    public $korte_beschrijving;
    public $beschrijving;
    public $prijs;

    //create update timestamp
    public $timestamps = true;

    //vraag in de les !!
    protected $table = 'products';

}








?>