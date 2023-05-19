<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CustomerResource extends CustomerResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray($request): array
    {
        return [
            'id'=>this->id,
            'name'=>this->name,
            'role'=>this->role,
            'phone'=>this->phone
        ];
    }
}
