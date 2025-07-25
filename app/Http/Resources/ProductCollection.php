<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => $this->collection,
            'extra' => 'Dado adicional'
        ];
    }

    public function with(Request $request) //Adicionar alguma informação
    {
        return ['extra_information' => 'Another data!'];
    }
}
