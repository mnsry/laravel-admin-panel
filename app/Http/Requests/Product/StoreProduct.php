<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduct extends FormRequest
{
    /**
     * @note Validation For Save Product
     * @see \App\Http\Controllers\Panel\ProductController::store
     */
    public function rules()
    {
        return [
            'title' => 'required|min:7',
            'body'  => 'required|min:20',
            'image' => 'required|image'
        ];
    }

    public function authorize()
    {
        return true;
    }
}
