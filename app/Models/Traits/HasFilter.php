<?php

declare(strict_types=1);

namespace App\Models\Traits;

use App\Http\Filters\Classic\Interfaces\IFilter;
use Illuminate\Database\Eloquent\Builder;

/**
 * Трейт Фильтрации
 */
trait HasFilter
{

    /**
     * Скоуп Laravel для фильтрации параметров у модели
     *
     * @param Builder $builder
     * @param IFilter $filter
     *
     * @return Builder
     */
    public static function scopeFilters(Builder $builder, IFilter $filter): Builder
    {
        return $filter->getFilters($builder);
    }
}
