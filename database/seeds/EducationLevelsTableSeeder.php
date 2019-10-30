<?php

use Illuminate\Database\Seeder;

class EducationLevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grade = new \App\EducationLevel();
        $grade->name = 'Bachelor';
        $grade->timestamps = false;
        $grade->save();
        $grade = new \App\EducationLevel();
        $grade->name = 'Master';
        $grade->timestamps = false;
        $grade->save();
        $grade = new \App\EducationLevel();
        $grade->name = 'PhD';
        $grade->timestamps = false;
        $grade->save();
    }
}
