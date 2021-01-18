<?php

namespace Database\Seeders;

use App\Models\Sidebar\Sidebar;
use Illuminate\Database\Seeder;

class SidebarSeeder extends Seeder
{
    /**
     * @note Create Sidebar
     *
     * @return void
     */
    public function run()
    {
        $sidebar1 = Sidebar::create([
            'title' => 'داشبورد',
            'slug' => 'panel',
            'prepend_icon' => 'mdi-view-dashboard-variant',
            'append_icon' => '',
            'active' => false,
        ]);
        $sidebar1->sidebarItems()->create([
            'title' => 'داشبورد',
            'slug' => 'panel',
        ]);

        $sidebar2 = Sidebar::create([
            'title' => 'کاربران',
            'slug' => 'user',
            'prepend_icon' => 'mdi-account-multiple',
            'append_icon' => 'mdi-chevron-down',
            'active' => false,
        ]);
        $sidebar2->sidebarItems()->create([
            'title' => 'نمایش کاربران',
            'slug' => 'user',
        ]);
        $sidebar2->sidebarItems()->create([
            'title' => 'نقش و دسترسی',
            'slug' => 'role',
        ]);

        $sidebar3 = Sidebar::create([
            'title' => 'محصولات',
            'slug' => 'product',
            'prepend_icon' => 'mdi-shopping',
            'append_icon' => 'mdi-chevron-down',
            'active' => false,
        ]);
        $sidebar3->sidebarItems()->create([
            'title' => 'نمایش محصولات',
            'slug' => 'product',
        ]);

        $sidebar4 = Sidebar::create([
            'title' => 'صندوق پیام',
            'slug' => 'message',
            'prepend_icon' => 'mdi-email',
            'append_icon' => '',
            'active' => false,
        ]);
        $sidebar4->sidebarItems()->create([
            'title' => 'صندوق پیام',
            'slug' => 'message',
        ]);

        $sidebar5 = Sidebar::create([
            'title' => 'تنطیمات',
            'slug' => 'setting',
            'prepend_icon' => 'mdi-cog-transfer-outline',
            'append_icon' => 'mdi-chevron-down',
            'active' => false,
        ]);
        $sidebar5->sidebarItems()->create([
            'title' => 'ایتم های منو',
            'slug' => 'sidebar',
        ]);
    }
}
