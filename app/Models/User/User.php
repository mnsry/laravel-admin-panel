<?php

namespace App\Models\User;

use App\Models\Message\Message;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Product\Product;
use App\Models\Role\Role;

class User extends Authenticatable
{
    /**
     * @note This Model Relation Many User With Mane { @see Role::users() }
     * @note This Model Relation One User With Many { @see Product::user() }
     */

    use HasApiTokens, Notifiable;

    // Add Column, If Column Use InTo Form
    protected $fillable = ['name', 'family', 'avatar', 'mobile', 'email', 'password',];

    // If Dont Send Column
    protected $hidden = ['password', 'remember_token',];

    // Cast For Column
    protected $casts = [
        'email_verified_at' => 'date:d-M-y',
        'created_at' => 'datetime:D, d M Y H:i:s T',
    ];

    // BrowseAdmin Middleware
    public function hasPermission($name)
    {
        $permissions = $this->roles->pluck('permissions')->flatten()->pluck('key')->toArray();
        return in_array($name, $permissions);
    }

    // Relation Many User With Many Model Role
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    // Relation One User With Many Model Product
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    //Relation One User With Many Model Message
    public function messages()
    {
        return $this->hasMany(Message::class)->orderByDesc('id');
    }
}
