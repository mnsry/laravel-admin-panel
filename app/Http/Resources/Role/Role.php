<?php

namespace App\Http\Resources\Role;

use Illuminate\Http\Resources\Json\JsonResource;

class Role extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'display_name' => $this->display_name,
            'created_at' => $this->created_at,
            'users' => $this->users,
            'permissions' => $this->permissions,
        ];
    }
}
