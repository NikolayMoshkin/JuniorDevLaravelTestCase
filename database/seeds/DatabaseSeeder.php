<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             ContentTableSeeder::class,
             EducationLevelsTableSeeder::class,
             RolesTableSeeder::class,
             UsersTableSeeder::class,
             ProposalsTableSeeder::class,
             ProposalTypeRoleSeeder::class,
         ]);
    }
}
