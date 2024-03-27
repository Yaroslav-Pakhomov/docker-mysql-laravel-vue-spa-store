<?php

declare(strict_types=1);

namespace App\Http\Filters\Classic;

use Illuminate\Database\Eloquent\Builder;

class ProductFilter extends AbstractFilter
{
    /**
     * Поля фильтрации
     */
    public const CATEGORIES = 'categories_checked';
    public const COLORS = 'colors_checked';
    public const TAGS = 'tags_checked';
    public const PRICE_FROM = 'price_from';
    public const PRICE_TO = 'price_to';

    /**
     * Методы привязанные к ключам-параметрам по которым происходит фильтрация
     *
     * @return string[]
     */
    public function getCallbacks(): array
    {
        return [
            self::CATEGORIES => 'categoriesFilter',
            self::COLORS     => 'colorsFilter',
            self::TAGS       => 'tagsFilter',
            self::PRICE_FROM => 'priceFromFilter',
            self::PRICE_TO   => 'priceToFilter',
        ];
    }

    public function categoriesFilter(Builder $builder, $value): void
    {
        $builder->whereIn('category_id', $value);
    }

    public function colorsFilter(Builder $builder, $value): void
    {
        $builder->whereHas('colors', function ($build) use ($value) {
            $build->whereIn('color_id', $value);
        });
    }

    public function tagsFilter(Builder $builder, $value): void
    {
        $builder->whereHas('tags', function ($build) use ($value) {
            $build->whereIn('tag_id', $value);
        });
    }

    public function priceFromFilter(Builder $builder, $value): void
    {
        $builder->where('price', '>=', (float)$value);
    }

    public function priceToFilter(Builder $builder, $value): void
    {
        $builder->where('price', '<=', (float)$value);
    }
}
