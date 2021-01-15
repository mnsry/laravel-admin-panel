<?php

namespace Database\Seeders;

use App\Models\Product\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'user_id' => 1,
            'title'   => 'گوشی موبایل سامسونگ S10',
            'body'    => 'توضیحات برای گوشی سامسونگ s10  و مشخصات',
            'image'   => 'https://saymandigital.com/wp-content/uploads/2019/02/Samsung-Galaxy-S10-Dual-SIM.jpg'
        ]);

        Product::create([
            'user_id' => 1,
            'title'   => 'گوشی موبایل آیفن 11',
            'body'    => 'توضیحات برای گوشی آیفن 11 و مشخصات',
            'image'   => 'https://s.mobile.ir/Static/cache/prd/38655-iPhone_11_01_610_710.jpg'
        ]);

        Product::create([
            'user_id' => 2,
            'title'   => 'لبتاب لنوو s540',
            'body'    => 'توضیحات برای لبتاب لنوو اس 540  و مشخصات',
            'image'   => 'https://lotuslaptop.com/wp-content/uploads/2019/09/911dhIY2SCL._AC_SL1500_.jpg'
        ]);

        Product::create([
            'user_id' => 2,
            'title'   => 'لبتاب مک بوک پرو',
            'body'    => 'توضیحات برای لبتاب مک بوک پرو و مشخصات',
            'image'   => 'https://www.apple-nic.com/images/store/apple-macbook-pro-16-inch-2019-spacegray.jpg'
        ]);
    }
}
