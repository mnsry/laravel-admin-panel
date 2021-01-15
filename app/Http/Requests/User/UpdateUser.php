<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUser extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'nullable|min:3',
            'family' => 'nullable|string',
            'mobile' => 'nullable|numeric',
            'avatar' => 'nullable|image'
        ];
    }
}
