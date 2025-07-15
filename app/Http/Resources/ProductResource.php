<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /*return [ Resposta em json com seguintes campos
            'name' => $this->name,
            'price' => $this->price,
        ];
*/
        return $this->resource->toArray(); //resposta com tudo
    }
}
