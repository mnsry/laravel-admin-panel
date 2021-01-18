<?php

namespace App\Http\Requests\Sidebar;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSidebar extends FormRequest
{
    /**
     * @note Validation For Edit Sidebar
     * @see \App\Http\Controllers\Panel\SidebarController::update
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5',
            'prepend_icon' => 'required|min:5',
            'append_icon' => 'nullable',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
