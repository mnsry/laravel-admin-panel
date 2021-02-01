<?php

namespace App\Http\Resources\Message;

use App\Http\Resources\User\User as UserResource;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\User\User;

class Message extends JsonResource
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
            'user_id' => $this->user_id,
            'message' => $this->message,
            'to_user' => $this->to_user,
            'created_at' => $this->created_at,
            /**
             * @note auth_user has Relation { @see \App\Models\Message\Message::user() }
             * @note to_user_info has Relation { @see \App\Models\Message\Message::to_user_info() }
             */
            'auth_user' => UserResource::make(User::find($this->user->id)),
            'to_user_info' => UserResource::make(User::find($this->to_user_info->id)),
        ];
    }
}
