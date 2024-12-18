<?php

namespace App\Repository;

use App\Models\Product;
use GuzzleHttp\Psr7\Request;

interface ProductRepositoryInterface
{
    public function index();

    public function show(int $id): Product;

    public function store(Request $request): Product;

    public function update(Request $request, int $id): bool;

    public function delete(int $id): bool;
}
