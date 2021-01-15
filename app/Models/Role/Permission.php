<?php

namespace App\Models\Role;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $fillable = ['key', 'display_key', 'table_name', 'display_table'];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public static function tables()
    {
        return [
            'roles' => 'نقش ها',
            'sidebars' => 'ایتم منو',
            'users' => 'کاربران',
            'products' => 'محصولات'
        ];
    }

    public static function createKey($table, $value)
    {
        self::firstOrCreate([
            'key' => 'browse_'.$table, 'display_key' => 'نمایش_'.$value,
            'table_name' => $table, 'display_table' => $value
        ]);
        self::firstOrCreate([
            'key' => 'read_'.$table, 'display_key' => 'خواندن_'.$value,
            'table_name' => $table, 'display_table' => $value
        ]);
        self::firstOrCreate([
            'key' => 'add_'.$table, 'display_key' => 'افزودن_'.$value,
            'table_name' => $table, 'display_table' => $value
        ]);
        self::firstOrCreate([
            'key' => 'edit_'.$table, 'display_key' => 'ویرایش_'.$value,
            'table_name' => $table, 'display_table' => $value
        ]);

        self::firstOrCreate([
            'key' => 'delete_'.$table, 'display_key' => 'حذف_'.$value,
            'table_name' => $table, 'display_table' => $value
        ]);
    }
}
