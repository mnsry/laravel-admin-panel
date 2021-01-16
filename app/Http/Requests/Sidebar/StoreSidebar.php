<?php

namespace App\Http\Requests\Sidebar;

use Illuminate\Foundation\Http\FormRequest;

class StoreSidebar extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|min:5',
            'prepend_icon' => 'required|min:5',
            'append_icon' => 'nullable',
        ];
    }
}
