<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TenantFileResource extends JsonResource
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
            'tenant_id' => $this->tenant_id,
            'file_name' => $this->file_name,
            'file_path' => $this->file_path,
            'file_type' => $this->file_type,
            'file_size' => $this->file_size,
            'file_size_formatted' => $this->when($this->file_size, function () {
                return number_format($this->file_size / 1024, 2) . ' KB';
            }),
            'is_enabled' => $this->is_enabled,
            'uploaded_by' => $this->uploaded_by,
            'uploaded_at' => $this->uploaded_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            'tenant' => $this->whenLoaded('tenant', fn() => new TenantResource($this->tenant)),
        ];
    }
}
