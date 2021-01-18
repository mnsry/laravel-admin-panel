<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUser extends FormRequest
{
    /**
     * @note Validation For Edit User
     * @see \App\Http\Controllers\Panel\UserController::update
     */
    public function rules()
    {
        return [
            'name' => 'nullable|min:3',
            'family' => 'nullable|string',
            'mobile' => 'nullable|numeric',
            'avatar' => 'nullable|image'
        ];
    }

    public function authorize()
    {
        return true;
    }
}
