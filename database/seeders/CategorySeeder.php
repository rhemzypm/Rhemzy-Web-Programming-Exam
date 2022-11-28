<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            //1
            'name' => 'Fantasy'
        ]);

        Category::create([
            //2
            'name' => 'Science Fiction'
        ]);

        Category::create([
            //3
            'name' => 'Dystopian'
        ]);

        Category::create([
            //4
            'name' => 'Adventure'
        ]);

        Category::create([
            //5
            'name' => 'Romance'
        ]);

        Category::create([
            //6
            'name' => 'Horror'
        ]);

        Category::create([
            //7
            'name' => 'Mystery'
        ]);

        Category::create([
            //8
            'name' => 'Thriller'
        ]);

        Category::create([
            //9
            'name' => 'History'
        ]);
    }
}
