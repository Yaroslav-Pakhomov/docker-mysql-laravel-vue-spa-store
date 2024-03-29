<?php

declare(strict_types=1);

namespace App\Http\Resources\Product;

use App\Http\Resources\Category\CategoriesResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property mixed $id
 * @property mixed $title
 * @property mixed $slug
 * @property mixed $description
 * @property mixed $content
 * @property mixed $created_at
 * @property mixed $updated_at
 * @property mixed $main_img
 * @property mixed $prev_img
 * @property mixed $old_price
 * @property mixed $price
 * @property mixed $category
 * @property mixed $colors
 * @property mixed $tags
 */
class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $description = '';
        if (isset($this->description)) {
            $description = strlen($this->description) > 17 ? substr($this->description, 0, 17) . '...' : $this->description;
        }
        return [
            'id'          => $this->id,
            'title'       => $this->title,
            'slug'        => $this->slug,
            'description' => $description,
            'main_img'    => $this->main_img ?? 'site/assets/img/product/main-product/product7.webp',
            'prev_img'    => $this->prev_img ?? 'site/assets/img/product/main-product/product8.webp',
            'old_price'   => $this->old_price,
            'price'       => $this->price,
            'created_at'  => is_object($this->created_at) ? $this->created_at->diffForHumans() : "",
            'updated_at'  => is_object($this->updated_at) ? $this->updated_at->diffForHumans() : "",
            'category'    => new CategoriesResource($this->category),
        ];
//        return parent::toArray($request);
    }
}
