<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategory extends FormRequest
{
    /**
     * @note Validation For Edit Category
     * @see \App\Http\Controllers\Panel\CategoryController::update
     */
    public function rules()
    {
        return [
            'category' => 'required|min:4',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
