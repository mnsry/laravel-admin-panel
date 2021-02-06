<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * @note You Should Run Seeder For Start App
     */
    public function run()
    {
        $this->call(SidebarSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(PersonalVisitSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(BrandSeeder::class);
    }
}
