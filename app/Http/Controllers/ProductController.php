<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Repository\ProductRepositoryInterface;

class ProductController extends Controller
{
    public function __construct(
        private ProductRepositoryInterface $productRepository,
    )
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = $this->productRepository->index();

        return ProductResource::collection($products);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request): ProductResource
    {
        $product = $this->productRepository->store($request->validated());

        return new ProductResource($product);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $product = $this->productRepository->show($product->id);

        return new ProductResource($product);
    }

    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product = $this->productRepository->update($request->validated(), $product->id);

        return new ProductResource($product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(int $id)
    {
        $this->productRepository->delete($id);

        return response()->json([
            'message' => 'Product deleted'
        ], 204);
    }
}
