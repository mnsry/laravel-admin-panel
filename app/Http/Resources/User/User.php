<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class User extends JsonResource
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
            'name' => $this->name,
            'family' => $this->family,
            'mobile' => $this->mobile,
            'email' => $this->email,
            'created_at' => $this->created_at,
            /**
             * @note Custom url() Address in { @see \config\filesystems } Line 58
             * @note roles has Relation
             */
            'avatar' => Storage::url($this->avatar),
            'roles' => $this->roles,
        ];
    }
}
