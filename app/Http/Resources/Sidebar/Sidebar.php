<?php

namespace App\Http\Resources\Sidebar;

use Illuminate\Http\Resources\Json\JsonResource;

class Sidebar extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'prepend_icon' => $this->prepend_icon,
            'append_icon' => $this->append_icon,
            'active' => $this->active,
            'created_at' => $this->created_at,
            'sidebarItems' => $this->sidebarItems,
        ];
    }
}
