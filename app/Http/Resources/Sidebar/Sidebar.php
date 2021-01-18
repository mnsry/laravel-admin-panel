<?php

namespace App\Http\Resources\Sidebar;

use Illuminate\Http\Resources\Json\JsonResource;

class Sidebar extends JsonResource
{
    /**
     * @note Array Export, Whit All Relationships If Exist
     *
     * @param $request
     * @return array
     */
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
            /**
             * @note sidebarItems has Relation
             */
            'sidebarItems' => $this->sidebarItems,
        ];
    }
}
