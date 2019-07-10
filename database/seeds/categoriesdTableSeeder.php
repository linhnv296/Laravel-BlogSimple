<?php

use App\Category;
use Illuminate\Database\Seeder;

class categoriesdTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i<10; $i++){
            $category = new Category();
            $category->name = 'Category '.$i;
            $category->image = 'https://codegym.vn/wp-content/uploads/2018/07/hoc_vien_4-min-1.png';
            $category->desc = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.';
            $category->save();
        }
    }
}
