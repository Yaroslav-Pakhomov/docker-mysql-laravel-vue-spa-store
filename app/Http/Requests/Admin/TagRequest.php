<?php

declare(strict_types=1);

namespace App\Http\Requests\Admin;

use App\Http\Requests\AbstractRequest;

class TagRequest extends AbstractRequest
{

    /**
     * С какой сущностью сейчас работаем (тег)
     *
     * @var array
     */
    protected array $entity = [
        'name'  => 'tag',
        'table' => 'tags',
    ];

}
