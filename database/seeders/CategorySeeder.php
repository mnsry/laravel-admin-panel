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
            'category' => 'موبایل'
        ]);

        Category::create([
            'category' => 'لپ تاپ'
        ]);

        $category3 = Category::create([
            'category' => 'گوشی موبایل',
            'category_id' => 1,
        ]);

        Category::create([
            'category' => 'لوازم جانبی موبایل',
            'category_id' => 1,
        ]);

        $category5 = Category::create([
            'category' => 'لبتاب و الترا بوک',
            'category_id' => 2,
        ]);

        Category::create([
            'category' => 'لوازم لبتاپ',
            'category_id' => 2,
        ]);
    }
}
