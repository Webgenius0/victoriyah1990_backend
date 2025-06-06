<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ContentResource extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array {
        return [
            'id'      => $this->id,
            'type'    => $this->type,
            'title'   => $this->title,
            'slug'    => $this->slug,
            'content' => $this->content,
        ];
    }
}
