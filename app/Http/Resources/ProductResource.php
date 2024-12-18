<?php

namespace App\Http\Resources;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property Product $resource
 */

class ProductResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' =>$this->resource->id,
            'name' => $this->resource->name,
            'description' => $this->resource->description,
        ];
    }
}
