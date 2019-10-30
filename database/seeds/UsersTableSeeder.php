<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\User;
        $admin->name = 'superadmin';
        $admin->email = '1@m.ru';
        $admin->password = bcrypt('12345678');
        $admin->role_id = 4;
        $admin->save();

        $admin = new \App\User;
        $admin->name = 'admin A';
        $admin->email = '2@m.ru';
        $admin->password = bcrypt('12345678');
        $admin->role_id = 2;
        $admin->save();

        $admin = new \App\User;
        $admin->name = 'admin B';
        $admin->email = '3@m.ru';
        $admin->password = bcrypt('12345678');
        $admin->role_id = 3;
        $admin->save();
    }
}
