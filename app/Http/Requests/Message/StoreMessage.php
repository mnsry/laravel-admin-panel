<?php

namespace App\Http\Requests\Message;

use Illuminate\Foundation\Http\FormRequest;

class StoreMessage extends FormRequest
{
    /**
     * @note Validation For Save Message
     * @see \App\Http\Controllers\Panel\MessageController::store
     */
    public function rules()
    {
        return [
            'message' => 'required|min:10'
        ];
    }

    public function authorize()
    {
        return true;
    }
}
