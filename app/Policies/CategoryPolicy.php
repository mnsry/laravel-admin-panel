<?php

namespace App\Policies;

use App\Models\User\User;

class CategoryPolicy
{
    public function browse(User $user)
    {
        return $user->hasPermission('browse_categories');
    }

    public function add(User $user)
    {
        return $user->hasPermission('add_categories');
    }

    public function read(User $user)
    {
        return $user->hasPermission('read_categories');
    }

    public function edit(User $user)
    {
        return $user->hasPermission('edit_categories');
    }

    public function delete(User $user)
    {
        return $user->hasPermission('delete_categories');
    }
}
