<?php

namespace App\Models\Message;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * @note This Model Relation Many Message With One { @see User::messages }
     */

    // Add Column, If Column Use InTo Form
    protected $fillable = ['message', 'to_user'];

    // Relation Many Message With One Model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation Many Message With One Model User
    public function to_user_info()
    {
        return $this->belongsTo(User::class, 'to_user');
    }
}
