<?php

namespace App\Models\Sidebar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SidebarItem extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug',];

    public function sidebar()
    {
        return $this->belongsTo(Sidebar::class);
    }
}
