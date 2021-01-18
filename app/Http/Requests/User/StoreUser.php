<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
{
    /**
     * @note Validation For Save User
     * @see \App\Http\Controllers\Panel\UserController::store
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3',
            'email' => 'required|email|min:7|unique:users',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
