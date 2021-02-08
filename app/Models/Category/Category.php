<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category'];

    public function childes()
    {
        return $this->hasMany(self::class, 'category_id');
    }

    public function allChildes()
    {
        return collect($this->childes)->pluck('posts')->flatten()->unique();
    }

    public function getAll($categories)
    {
        $append = collect();
        foreach ($categories as $category)
        {
            if ($category->childes->count())
            {
                $append->merge($category->childes);
            }
        }
        if ($append->count())
        {
            $append = $this->getAll($append);
        }
        return $categories->merge($append);
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'category_id');
    }

    public static function backParent($category)
    {
        if ($category->category_id == null) {
            return $category;
        } else {
            return Category::backParent($category->parent);
        }
    }

    public function brands()
    {
        return $this->morphedByMany(Brand::class, 'categoryable');
    }
}
