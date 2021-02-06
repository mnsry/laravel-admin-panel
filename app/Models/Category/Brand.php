<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'category_brands';

    protected $guarded = [];

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categoryable');
    }
}
