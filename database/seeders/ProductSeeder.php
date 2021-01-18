<?php

namespace Database\Seeders;

use App\Models\Product\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * @note Create Product
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'user_id' => 1,
            'title'   => 'گوشی موبایل سامسونگ S10',
            'body'    => 'توضیحات برای گوشی سامسونگ s10  و مشخصات',
            'image'   => 'mansory.gif'
        ]);

        Product::create([
            'user_id' => 1,
            'title'   => 'گوشی موبایل آیفن 11',
            'body'    => 'توضیحات برای گوشی آیفن 11 و مشخصات',
            'image'   => 'mansory.gif'
        ]);

        Product::create([
            'user_id' => 2,
            'title'   => 'لبتاب لنوو s540',
            'body'    => 'توضیحات برای لبتاب لنوو اس 540  و مشخصات',
            'image'   => 'mansory.gif'
        ]);

        Product::create([
            'user_id' => 2,
            'title'   => 'لبتاب مک بوک پرو',
            'body'    => 'توضیحات برای لبتاب مک بوک پرو و مشخصات',
            'image'   => 'mansory.gif'
        ]);
    }
}
