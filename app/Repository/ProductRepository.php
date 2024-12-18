<?php

namespace App\Repository;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductRepository implements ProductRepositoryInterface
{
    public function __construct()
    {
        //
    }

    public function index(): Collection
    {
        return Product::query()->get();
    }

    public function show($id): Product
    {
        return Product::query()->findOrFail($id);
    }

    public function store($request): Product
    {
        return Product::query()->create($request->all());
    }

    public function update($request, $id): bool
    {
        return Product::query()->findOrFail($id)->update($request->all());
    }

    public function delete(int $id): bool
    {
        return Product::query()->findOrFail($id)->delete();
    }
}
