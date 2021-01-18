<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProduct extends FormRequest
{
    /**
     * @note Validation For Edit Product
     * @see \App\Http\Controllers\Panel\ProductController::update
     */
    public function rules()
    {
        return [
            'title' => 'required|min:7',
            'body' => 'required|min:20',
            'image' => 'nullable|image'
        ];
    }

    public function authorize()
    {
        return true;
    }
}
