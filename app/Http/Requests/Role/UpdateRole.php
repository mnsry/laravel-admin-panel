<?php

namespace App\Http\Requests\Role;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRole extends FormRequest
{
    /**
     * @note Validation For Edit Role
     * @see \App\Http\Controllers\Panel\RoleController::update
     */
    public function rules()
    {
        return [
            'name' => 'required|min:4',
            'display_name' => 'required|min:5'
        ];
    }

    public function authorize()
    {
        return true;
    }
}
