<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Database\Eloquent\Model;
use App\MenuItem;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UserTableSeeder');
        $this->command->info('User table seeded!');
    }


}

class UserTableSeeder extends Seeder {

    public function run()
    {
        //fill database with users
        DB::table('users')->delete();

        User::create(array('email' => 'foo@bar.com' ,'name' => 'admin' , 'password' => 'admin'));

        //fill database with navugationbar menu items
        DB::table('menu')->delete();


        $menu_item =(array('label' => 'Home', 'link'=> '/home' , 'parent' => 0, 'sort' => 0, 'admin' => 0 ));
        DB::table('menu')->insert($menu_item);

        $menu_item =(array('label' => 'Store', 'link'=> '/store' , 'parent' => 0, 'sort' => 0, 'admin' => 1 ));
        DB::table('menu')->insert($menu_item);

        $menu_item =(array('label' => 'Blog', 'link'=> '/blog' , 'parent' => 0, 'sort' => 0, 'admin' => 0 ));
        DB::table('menu')->insert($menu_item);

        $menu_item =(array('label' => 'Admin', 'link'=> '/cms' , 'parent' => 0, 'sort' => 0, 'admin' => 1 ));
        DB::table('menu')->insert($menu_item);





        $cat = factory(App\Categoriee::class,5)->create();
        $pro = factory(App\Product::class,10)->create();





    }

}
