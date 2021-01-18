<?php

namespace App\Policies;

use App\Models\User\User;

class ProductPolicy
{
    /**
     * @note This Gate For Check Key Permission
     *
     * @param User $user
     * @return bool
     */

    public function browse(User $user)
    {
        return $user->hasPermission('browse_products');
    }

    public function read(User $user)
    {
        return $user->hasPermission('read_products');
    }

    public function add(User $user)
    {
        return $user->hasPermission('add_products');
    }

    public function edit(User $user)
    {
        return $user->hasPermission('edit_products');
    }

    public function delete(User $user)
    {
        return $user->hasPermission('delete_products');
    }
}
