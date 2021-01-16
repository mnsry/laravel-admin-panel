<?php

namespace App\Policies;

use App\Models\User\User;

class RolePolicy
{
    public function browse(User $user)
    {
        return $user->hasPermission('browse_roles');
    }

    public function read(User $user)
    {
        return $user->hasPermission('read_roles');
    }

    public function add(User $user)
    {
        return $user->hasPermission('add_roles');
    }

    public function edit(User $user)
    {
        return $user->hasPermission('edit_roles');
    }

    public function delete(User $user)
    {
        return $user->hasPermission('delete_roles');
    }
}
