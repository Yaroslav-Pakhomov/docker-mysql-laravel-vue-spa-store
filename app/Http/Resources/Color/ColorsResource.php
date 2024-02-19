<?php

declare(strict_types=1);

namespace App\Http\Resources\Color;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed $id
 * @property mixed $slug
 * @property mixed $title
 * @property mixed $code
 */
class ColorsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'    => $this->id,
            'slug'  => $this->slug,
            'title' => $this->title,
            'code'  => $this->code,
        ];
//        return parent::toArray($request);
    }
}
