<?php

namespace App\Models\Sidebar;

use Illuminate\Database\Eloquent\Model;

class SidebarItem extends Model
{
    /**
     * @note This Model Relation One Sidebar With Many { @see SidebarItem::sidebar }
     */

    // Add Column, If Column Use InTo Form
    protected $fillable = ['title', 'slug',];

    // Relation Many SidebarItem With One Model Sidebar
    public function sidebar()
    {
        return $this->belongsTo(Sidebar::class);
    }
}
