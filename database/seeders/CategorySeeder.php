<?php

namespace Database\Seeders;

use App\Models\Category\Category;
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
            'title' => 'موبایل'
        ]);

        Category::create([
            'title' => 'لپ تاپ'
        ]);

        $category3 = Category::create([
            'title' => 'گوشی موبایل',
            'category_id' => 1,
        ]);

        Category::create([
            'title' => 'لوازم جانبی موبایل',
            'category_id' => 1,
        ]);

        $category5 = Category::create([
            'title' => 'لبتاب و الترا بوک',
            'category_id' => 2,
        ]);

        Category::create([
            'title' => 'لوازم لبتاپ',
            'category_id' => 2,
        ]);
    }
}
