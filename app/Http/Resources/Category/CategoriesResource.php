<?php

declare(strict_types=1);

namespace App\Http\Resources\Category;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed $id
 * @property mixed $slug
 * @property mixed $title
 */
class CategoriesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $title = strlen($this->title) > 17 ? substr($this->title, 0, 17) . '...' : $this->title;
        return [
            'id'    => $this->id,
            'slug'  => $this->slug,
            'title' => $title,
        ];
//        return parent::toArray($request);
    }
}
