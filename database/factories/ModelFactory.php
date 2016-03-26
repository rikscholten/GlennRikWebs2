<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'isAdmin' => true,
    ];
});

$factory->define(App\Categoriee::class, function (Faker\Generator $faker) {
    $cats = DB::table('categoriees')->distinct()->select('id')->get();

    $cat = array_rand($cats);
    if($cats != 0){


    }else{
        return;
    }

    echo $cat;
    return [

        'naam' => $faker->name,
        'beschrijving' => $faker->text(),
        'parent_id' => $cat ,
    ];
});

$factory->define(App\Product::class, function (Faker\Generator  $faker) {
    return [
        'naam' => $faker->name,
        'korte_beschrijving' => $faker->text(50),
        'beschrijving' => $faker->text(),
        'artiest' => $faker->name,
        'release_date' => $faker->year(1900,time('yyyy')),
        'image' => $faker->image('C:\xamppWeb\htdocs\GlennRikWebs2\public\images',200,200,null,false),
        'prijs' => $faker->randomFloat(0,0,20),
        'caterorie_id' => 1 ,





    ];
});
