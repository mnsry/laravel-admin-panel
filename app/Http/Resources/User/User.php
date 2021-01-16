<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class User extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'family' => $this->family,
            'avatar' => Storage::url($this->avatar),
            'mobile' => $this->mobile,
            'email' => $this->email,
            'created_at' => $this->created_at,
            'roles' => $this->roles,
        ];
    }
}
