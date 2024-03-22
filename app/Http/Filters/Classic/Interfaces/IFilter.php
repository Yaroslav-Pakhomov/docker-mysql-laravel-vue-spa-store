<?php

declare(strict_types=1);

namespace App\Http\Filters\Classic\Interfaces;

use Illuminate\Database\Eloquent\Builder;

interface IFilter
{

    /**
     * Проверка существования фильтра и вызов ему соответствующего метода
     *
     * @param Builder $builder
     *
     * @return Builder
     */
    public function getFilters(Builder $builder): Builder;

    /**
     * Методы привязанные к ключам-параметрам по которым происходит фильтрация
     *
     * @return string[]
     */
    public function getCallbacks(): array;
}
