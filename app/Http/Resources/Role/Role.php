<?php

namespace App\Http\Resources\Role;

use Illuminate\Http\Resources\Json\JsonResource;

class Role extends JsonResource
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
            'display_name' => $this->display_name,
            'created_at' => $this->created_at,
            /**
             * @note user has Relation
             * @note permissions has Relation
             */
            'users' => $this->users,
            'permissions' => $this->permissions,
        ];
    }
}
