<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * @note CRUD For Category
     */

    //
    public function index()
    {
        $this->authorize('browse', Category::class);

        $categories = Category::whereNull('category_id')
            ->with('childes')
            ->get();

        return response()->json(['data' => $categories]);
    }

    //
    public function show(Category $category)
    {
        $this->authorize('read', $category);

        return $category;
    }

    //
    public function store(Request $request)
    {
        $this->authorize('add', Category::class);

        $category = Category::create($request->validate([
            'title' => 'required|min:3',
            'category_id' => 'nullable',
        ]));

        return response()->json(['data' => $category]);
    }

    //
    public function update(Request $request, Category $category)
    {
        $this->authorize('edit', $category);

        $request->validate([
            'title' => 'required|min:3'
        ]);

        $category->title = $request->title;
        $category->category_id = $request->category_id;
        $category->update();

        return response()->json(['data' => $category]);
    }

    //
    public function destroy(Category $category)
    {
        $this->authorize('delete', $category);

        $category->delete();

        return null;
    }
}
