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

    public $timestamps = false;
    protected $fillable = [
        'naam',
        'korte_beschrijving',
        'beschrijving',
        'artiest',
        'prijs',
        'created_at',
        'updated_at',
        'aantal'=>0,
    ];

    public function __toString() {
        return $this->id;
    }
}








?>