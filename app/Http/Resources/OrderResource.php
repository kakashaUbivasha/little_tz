<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'            => $this->id,
            'order_number'  => $this->order_number,
            'customer_name' => $this->customer_name,
            'date'          => $this->date,
            'total_amount'  => $this->total_amount,
            'status'        => $this->status,
        ];
    }
}
