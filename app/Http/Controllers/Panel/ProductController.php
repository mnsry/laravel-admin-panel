<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use App\Http\Resources\Product\Product as ProductResource;
use App\Http\Requests\Product\StoreProduct;
use App\Http\Requests\Product\UpdateProduct;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $this->authorize('browse', Product::class);

        return (ProductResource::collection(Product::all()))
            ->additional([
                'message'=>[
                    ['پیام سرور: محصولات فرستاده شد']
                ]
            ]);
    }

    public function show(Product $product)
    {
        $this->authorize('read', Product::class);

        return (ProductResource::make(Product::find($product->id)))
            ->additional([
                'message'=>[
                    ['پیام سرور: محصول '.$product->title.' فرستاده شد.']
                ]
            ]);
    }

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

    public function destroy(Product $product)
    {
        $this->authorize('delete', Product::class);

        $product->delete();

        return response()->json([
            'message'=>[
                ['پیام سرور: محصولات حذف شد']
            ]
        ], 200);
    }
}
