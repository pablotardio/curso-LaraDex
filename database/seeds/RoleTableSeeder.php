<?php

use Illuminate\Database\Seeder;
use LaraDex\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role=new Role();
        $role->name="admin";
        $role->decription="administrador";
        $role->save();

        $role=new Role();
        $role->name="user";
        $role->decription="usuario";
        $role->save();
        //
    }
}
