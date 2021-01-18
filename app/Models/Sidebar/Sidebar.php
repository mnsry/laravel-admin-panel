<?php

namespace App\Models\Sidebar;

use Illuminate\Database\Eloquent\Model;

class Sidebar extends Model
{
    /**
     * @note This Model Relation One Sidebar With Many { @see SidebarItem::sidebar }
     */

    // Add Column, If Column Use InTo Form
    protected $fillable = ['title', 'slug', 'prepend_icon', 'append_icon', 'active',];

    // Relation One Sidebar With Many Model SidebarItem
    public function sidebarItems()
    {
        return $this->hasMany(SidebarItem::class);
    }
}
