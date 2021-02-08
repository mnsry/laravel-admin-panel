<?php

namespace App\Http\Resources\Category;

use Illuminate\Http\Resources\Json\JsonResource;

class Category extends JsonResource
{
    /**
     * @note Array Export, Whit All Relationships If Exist
     *
     * @param $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
//        return [
//            'id' => $this->id,
//        ];
    }
}
