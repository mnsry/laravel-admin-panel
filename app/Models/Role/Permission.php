<?php

namespace App\Models\Role;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    /**
     * @note This Model Relation Many Permission With Many { @see Role::permissions }
     */

    // Add Column, If Column Use InTo Form
    protected $fillable = ['key', 'display_key', 'table_name', 'display_table'];

    // Relation Many Permission With Many Model Role
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    // Please Add Table If Need Key Permission
    public static function tables()
    {
        return [
            'roles' => 'نقش ها',
            'sidebars' => 'ایتم منو',
            'users' => 'کاربران',
            'products' => 'محصولات',
            'categories' => 'دسته ها',
        ];
    }

    // Auto Create Permission Key
    public static function createKey($table, $value)
    {
        // Create 'browse_' + TableName Key Permission
        self::firstOrCreate([
            'key' => 'browse_'.$table, 'display_key' => 'نمایش_'.$value,
            'table_name' => $table, 'display_table' => $value
        ]);

        // Create 'read_' + TableName Key Permission
        self::firstOrCreate([
            'key' => 'read_'.$table, 'display_key' => 'خواندن_'.$value,
            'table_name' => $table, 'display_table' => $value
        ]);

        // Create 'add_' + TableName Key Permission
        self::firstOrCreate([
            'key' => 'add_'.$table, 'display_key' => 'افزودن_'.$value,
            'table_name' => $table, 'display_table' => $value
        ]);

        // Create 'edit_' + TableName Key Permission
        self::firstOrCreate([
            'key' => 'edit_'.$table, 'display_key' => 'ویرایش_'.$value,
            'table_name' => $table, 'display_table' => $value
        ]);

        // Create 'delete_' + TableName Key Permission
        self::firstOrCreate([
            'key' => 'delete_'.$table, 'display_key' => 'حذف_'.$value,
            'table_name' => $table, 'display_table' => $value
        ]);
    }
}
