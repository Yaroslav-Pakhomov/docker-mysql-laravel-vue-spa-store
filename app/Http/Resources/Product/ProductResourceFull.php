<?php

declare(strict_types=1);

namespace App\Http\Resources\Product;

use App\Http\Resources\Category\CategoriesResourceFull;
use App\Http\Resources\Color\ColorsResource;
use App\Http\Resources\Tag\TagsResource;
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
class ProductResourceFull extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'          => $this->id,
            'title'       => $this->title,
            'slug'        => $this->slug,
            'description' => $this->description,
            'main_img'    => $this->main_img ?? 'site/assets/img/product/main-product/product7.webp',
            'prev_img'    => $this->prev_img ?? 'site/assets/img/product/main-product/product8.webp',
            'old_price'   => $this->old_price,
            'price'       => $this->price,
            'created_at'  => is_object($this->created_at) ? $this->created_at->diffForHumans() : "",
            'updated_at'  => is_object($this->updated_at) ? $this->updated_at->diffForHumans() : "",
            'category'    => new CategoriesResourceFull($this->category),
            'colors'      => $this->colors ? new ColorsResource($this->colors) : [],
            'tags'        => $this->tags ? new TagsResource($this->tags) : [],
        ];
//        return parent::toArray($request);
    }
}
