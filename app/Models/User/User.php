<?php

namespace App\Models\User;

use App\Models\Product\Product;
use App\Models\Role\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ['name', 'family', 'avatar', 'mobile', 'email', 'password',];

    protected $hidden = ['password', 'remember_token',];

    protected $casts = [
        'email_verified_at' => 'date:d-M-y',
        'created_at' => 'datetime:D, d M Y H:i:s T',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasPermission($name)
    {
        $permissions = $this->roles->pluck('permissions')->flatten()->pluck('key')->toArray();
        return in_array($name, $permissions);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    // You Person Blocking
    public function blocking()
    {
        return $this->belongsToMany(User::class, 'user_blocks', 'user_blocking', 'user_blocked');
    }

    // Person You Blocked
    public function blocked()
    {
        return $this->belongsToMany(User::class, 'user_blocks', 'user_blocked', 'user_blocking');
    }

    // You Person Following
    public function following()
    {
        return $this->belongsToMany(User::class, 'user_followers', 'user_following', 'user_followed');
    }

    // Person You Followed
    public function followed()
    {
        return $this->belongsToMany(User::class, 'user_followers', 'user_followed', 'user_following');
    }
}
