<?php

namespace App\Policies;

use App\Models\User\User;

class UserPolicy
{
    /**
     * @note This Gate For Check Key Permission
     *
     * @param User $user
     * @return bool
     */

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
