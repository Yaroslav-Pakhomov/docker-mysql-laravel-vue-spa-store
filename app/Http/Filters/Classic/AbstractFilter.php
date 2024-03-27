<?php

declare(strict_types=1);

namespace App\Http\Filters\Classic;

use App\Http\Filters\Classic\Interfaces\IFilter;
use Illuminate\Database\Eloquent\Builder;

abstract class AbstractFilter implements IFilter
{
    /**
     * @param array $request_filter массив со значениями фильтрации
     */
    private array $request_filter;

    public function __construct($request_filter)
    {
        $this->request_filter = $request_filter;
    }

    /**
     * Проверка существования фильтра и вызов ему соответствующего метода
     *
     * @param Builder $builder
     *
     * @return Builder
     */
    public function getFilters(Builder $builder): Builder
    {
        foreach ($this->getCallbacks() as $param => $method) {
            if (isset($this->request_filter[$param])) {
                $this->$method($builder, $this->request_filter[$param]);
            }
        }

        return $builder;
    }


    /**
     * Методы привязанные к ключам-параметрам по которым происходит фильтрация
     *
     * @return string[]
     */
    abstract public function getCallbacks(): array;
}
