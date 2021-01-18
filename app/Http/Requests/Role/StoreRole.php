<?php

namespace App\Http\Requests\Role;

use Illuminate\Foundation\Http\FormRequest;

class StoreRole extends FormRequest
{
    /**
     * @note Validation For Save Role
     * @see \App\Http\Controllers\Panel\RoleController::store
     */
    public function rules()
    {
        return [
            'name' => 'required|min:4|unique:roles',
            'display_name' => 'required|min:5'
        ];
    }

    public function authorize()
    {
        return true;
    }
}
