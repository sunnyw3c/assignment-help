<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AssignmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'order_number' => $this->order_number,
            'title' => $this->title,
            'subject' => $this->subject,
            'service_type' => $this->service_type,
            'deadline' => $this->deadline,
            'pages' => $this->pages,
            'budget' => $this->budget,
            'original_price' => $this->original_price,
            'payment_status' => $this->payment_status ?? 'unpaid',
            'amount_paid' => $this->amount_paid ?? 0,
            'amount_due' => $this->amount_due ?? 0,
            'status' => $this->status ?? 'Pending',
            'created_at' => $this->created_at ? $this->created_at->format('Y-m-d H:i:s') : null,
            'updated_at' => $this->updated_at ? $this->updated_at->format('Y-m-d H:i:s') : null,
        ];
    }
}
