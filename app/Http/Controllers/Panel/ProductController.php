<?php

namespace App\Http\Controllers\Panel;

use App\Http\Resources\Product\Product as ProductResource;
use App\Http\Requests\Product\UpdateProduct;
use App\Http\Requests\Product\StoreProduct;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Product\Product;

class ProductController extends Controller
{
    /**
     * @note CRUD For Products
     * @note You Should Have Key Permission , And We Use Of Api Resources
     * @note You Can See Array Return, { @see \App\Http\Resources\Product\Product }
     */

    // Show All Products
    public function index()
    {
        $this->authorize('browse', Product::class);

        return (ProductResource::collection(Product::all()))
            ->additional([
                'message'=>[
                    ['پیام سرور: محصولات را دریافت کنید.']
                ]
            ]);
    }

    // Show One Product
    public function show(Product $product)
    {
        $this->authorize('read', Product::class);

        return (ProductResource::make(Product::find($product->id)))
            ->additional([
                'message'=>[
                    ['پیام سرور: محصول '.$product->title.' را دریافت کنید.']
                ]
            ]);
    }

    // Save One Product, And Validate StoreProduct
    public function store(StoreProduct $request)
    {
        $this->authorize('add', Product::class);

        $product = new Product();
        $product->user_id = auth()->id();
        $product->title = $request->title;
        $product->body = $request->body;
        $product->save();
        $product->image = $request->file('image')->store("image/product/{$product->id}");
        $product->save();

        return (ProductResource::make(Product::find($product->id)))
            ->additional([
                'message'=>[
                    ['پیام سرور: محصول '.$product->title.' ایجاد شد.']
                ]
            ])->response()->setStatusCode(201);
    }

    // Edit One Product, And Validate UpdateProduct
    public function update(UpdateProduct $request, Product $product)
    {
        $this->authorize('edit', Product::class);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store("image/product/{$product->id}");
            Storage::delete($product->image);
        } else {
            $path = $product->image;
        }
        $product->update([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'body' => $request->body,
            'image' => $path
        ]);

        return (ProductResource::make(Product::find($product->id)))
            ->additional([
                'message'=>[
                    ['پیام سرور: محصول '.$product->title.' ویرایش شد.']
                ]
            ]);
    }

    // Delete One Product
    public function destroy(Product $product)
    {
        $this->authorize('delete', Product::class);

        // cant seeder delete
        $dontDelete = [1, 2, 3, 4];
        if (!in_array($product->id, $dontDelete)) {
            $product->delete();
            return response()->json([
                'message'=>[
                    ['پیام سرور: محصول حذف شد']
                ]
            ], 200);
        }

        return response()->json([
            'message'=>[
                ['پیام سرور: برای تست پنل محصول حذف نمی شود']
            ]
        ], 200);
    }
}
