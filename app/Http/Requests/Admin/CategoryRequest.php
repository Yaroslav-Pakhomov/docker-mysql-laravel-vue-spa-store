<?php

declare(strict_types=1);

namespace App\Http\Requests\Admin;

use App\Http\Requests\AbstractRequest;

class CategoryRequest extends AbstractRequest
{

    /**
     * С какой сущностью сейчас работаем (категория)
     *
     * @var array
     */
    protected array $entity = [
        'name'  => 'category',
        'table' => 'categories',
    ];

}
