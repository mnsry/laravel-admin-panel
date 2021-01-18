<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class Product extends JsonResource
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
            'title' => $this->title,
            'body' => $this->body,
            'created_at' => $this->created_at,
            /**
             * @note Custom url() Address in { @see \config\filesystems } Line 58
             * @note user has Relation
             */
            'image' => Storage::url($this->image),
            'user' => $this->user
        ];
    }
}
