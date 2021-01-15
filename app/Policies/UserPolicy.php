<?php

namespace App\Policies;

use App\Models\User\User;

class UserPolicy
{
    public function browse(User $user)
    {
        return $user->hasPermission('browse_users');
    }

    public function read(User $user)
    {
        return $user->hasPermission('read_users');
    }

    public function add(User $user)
    {
        return $user->hasPermission('add_users');
    }

    public function edit(User $user)
    {
        return $user->hasPermission('edit_users');
    }

    public function delete(User $user)
    {
        return $user->hasPermission('delete_users');
    }
}
