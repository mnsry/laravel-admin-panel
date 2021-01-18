<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role\Role;
use App\Models\Role\Permission;

class RoleSeeder extends Seeder
{
    /**
     * @note Create Role
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create([
            'name'         => 'admin',
            'display_name' => 'مدیر کل',
        ]);

        $permissions = Permission::all()->pluck('id')->toArray();
        $role->permissions()->attach($permissions);
        $role->users()->attach(1);

        Role::create([
            'name'         => 'user',
            'display_name' => 'کاربر عادی',
        ]);
    }
}
