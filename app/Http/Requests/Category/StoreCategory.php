<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategory extends FormRequest
{
    /**
     * @note Validation For Save Category
     * @see \App\Http\Controllers\Panel\CategoryController::store
     */
    public function rules()
    {
        return [
            'category' => 'required|min:4|unique:categories',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
