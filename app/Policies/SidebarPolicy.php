<?php

namespace App\Policies;

use App\Models\User\User;

class SidebarPolicy
{
    /**
     * @note This Gate For Check Key Permission
     *
     * @param User $user
     * @return bool
     */

    public function browse(User $user)
    {
        return $user->hasPermission('browse_sidebars');
    }

    public function read(User $user)
    {
        return $user->hasPermission('read_sidebars');
    }

    public function add(User $user)
    {
        return $user->hasPermission('add_sidebars');
    }

    public function edit(User $user)
    {
        return $user->hasPermission('edit_sidebars');
    }

    public function delete(User $user)
    {
        return $user->hasPermission('delete_sidebars');
    }
}
