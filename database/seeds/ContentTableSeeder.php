<?php

use Illuminate\Database\Seeder;

class ContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content = new \App\Content();
        $content->text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, nostrum!';
        $content->timestamps = false;
        $content->save();
    }
}
