<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Membuat role admin
        $adminRole = new Role();
        $adminRole->name = 'admin';
        $adminRole->display_name = 'Admin';
        $adminRole->save();

        //Membuat sample admin
        $admin = new User();
        $admin->name = 'Fauzan Abdullah';
        $admin->email = 'uzhantheforev@gmail.com';
        $admin->password = bcrypt('uzhantheforev');
        $admin->save();
        $admin->attachRole($adminRole);
    }
}
