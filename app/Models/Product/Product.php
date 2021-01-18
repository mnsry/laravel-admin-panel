<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;
use App\Models\User\User;

class Product extends Model
{
    /**
     * @note This Model Relation Many Product With One { @see User::products }
     */

    // Add Column, If Column Use InTo Form
    protected $fillable = ['user_id', 'title', 'body', 'image'];

    // Relation Many Product With One Model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
