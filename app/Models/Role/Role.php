<?php

namespace App\Models\Role;

use Illuminate\Database\Eloquent\Model;
use App\Models\User\User;

class Role extends Model
{
    /**
     * @note This Model Relation Many Role With Many { @see User::roles }
     * @note This Model Relation Many Role With Many { @see Permission::roles }
     */

    // Add Column, If Column Use InTo Form
    protected $fillable = ['name', 'display_name'];

    // Relation Many Role With Many Model User
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    // Relation Many Role With Many Model Permission
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}
