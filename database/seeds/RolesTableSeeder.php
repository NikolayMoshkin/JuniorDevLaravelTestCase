<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new \App\Role();
        $role->id = 1;
        $role->role = 'user';
        $role->timestamps = false;
        $role->save();

        $role = new \App\Role();
        $role->id = 2;
        $role->role = 'admin A';
        $role->timestamps = false;
        $role->save();

        $role = new \App\Role();
        $role->id = 3;
        $role->role = 'admin B';
        $role->timestamps = false;
        $role->save();

        $role = new \App\Role();
        $role->id = 4;
        $role->role = 'superadmin';
        $role->timestamps = false;
        $role->save();

    }
}
