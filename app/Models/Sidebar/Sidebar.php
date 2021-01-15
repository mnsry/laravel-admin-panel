<?php

namespace App\Models\Sidebar;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sidebar extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'prepend_icon', 'append_icon', 'active',];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d');
    }

    public function sidebarItems()
    {
        return $this->hasMany(SidebarItem::class);
    }
}
