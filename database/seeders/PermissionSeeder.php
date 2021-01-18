<?php

namespace Database\Seeders;

use App\Models\Role\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * @note Create Key Permission
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'key' => 'browse_admin',
            'display_key' => 'کلید ادمین',
            'table_name' => 'admins',
            'display_table' => 'ادمین',
        ]);

        foreach (Permission::tables() as $table => $value) {
            Permission::createKey($table, $value);
        }
    }
}
