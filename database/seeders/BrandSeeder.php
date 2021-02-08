<?php

namespace Database\Seeders;

use App\Models\Category\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brand1 = Brand::create([
            'brand' => 'سامسونگ',
        ]);
        $brand1->categories()->attach([1, 2]);

        $brand2 = Brand::create([
            'brand' => 'اپل',
        ]);
        $brand2->categories()->attach([1, 2]);

        $brand3 = Brand::create([
            'brand' => 'شیائومی',
        ]);
        $brand3->categories()->attach(1);

        $brand4 = Brand::create([
            'brand' => 'اچ پی',
        ]);
        $brand4->categories()->attach(2);

        $brand5 = Brand::create([
            'brand' => 'ایسوس',
        ]);
        $brand5->categories()->attach(2);
    }
}
