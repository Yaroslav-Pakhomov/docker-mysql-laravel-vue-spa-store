<?php

declare(strict_types=1);

namespace App\Http\Requests\Admin;

use App\Http\Requests\AbstractRequest;

class ProductRequest extends AbstractRequest
{

    /**
     * С какой сущностью сейчас работаем (тег)
     *
     * @var array
     */
    protected array $entity = [
        'name'  => 'product',
        'table' => 'products',
    ];

    /**
     * @return array|string[]
     */
    public function createItem(): array
    {
        // dd(ProductRequest::all());
        $rules = [
            'description'    => 'required|string',
            'content'        => 'nullable|string',
            'img'            => 'nullable|mimes:jpeg,jpg,png|max:5000',
            'price'          => 'required|decimal:2',
            'old_price'      => 'nullable|decimal:2',
            'count'          => 'required|integer',
            'is_published'   => 'nullable|string',
            'category_id'    => 'nullable|integer',
            'tags'           => 'nullable|array',
            'colors'         => 'nullable|array',
            'users'          => 'nullable|array',
            'product_images' => 'nullable|array',
        ];

        return array_merge(parent::createItem(), $rules);
    }

    /**
     * @return array|string[]
     */
    public function updateItem(): array
    {
        $rules = [
            'description'    => 'required|string',
            'content'        => 'nullable|string',
            'img'            => 'nullable|mimes:jpeg,jpg,png|max:5000',
            'price'          => 'required|decimal:2',
            'old_price'      => 'nullable|decimal:2',
            'count'          => 'required|integer',
            'is_published'   => 'nullable|string',
            'category_id'    => 'nullable|integer',
            'tags'           => 'nullable|array',
            'colors'         => 'nullable|array',
            'users'          => 'nullable|array',
            'product_images' => 'nullable|array',
        ];

        return array_merge(parent::updateItem(), $rules);
    }

    public function messages(): array
    {
        $messages = [
            'description'    => [
                'required' => 'Поле ":attribute" не заполнено.',
                'string'   => 'Поле ":attribute" д.б. строкой.',
            ],
            'content'        => [
                'string' => 'Поле ":attribute" д.б. строкой.',
            ],
            'img'            => [
                'mimes' => 'Файл «:attribute» должен иметь формат :values',
                'max'   => 'Файл «:attribute» должен быть не больше :max Кбайт',
            ],
            'price'          => [
                'required' => 'Поле ":attribute" не заполнено.',
                'decimal'  => 'Поле ":attribute" д.б. формата ###.00.',
            ],
            'old_price'      => [
                'decimal' => 'Поле ":attribute" д.б. формата ###.00 .',
            ],
            'count'          => [
                'required' => 'Поле ":attribute" не заполнено.',
                'integer'  => 'Поле ":attribute" д.б. числом.',
            ],
            'is_published'   => [
                'string' => 'Поле ":attribute" д.б. строкой.',
            ],
            'category_id'    => [
                'integer' => 'Поле ":attribute" д.б. числом.',
            ],
            'tags'           => [
                'array' => 'Не верный формат поля ":attribute".',
            ],
            'colors'         => [
                'array' => 'Не верный формат поля ":attribute".',
            ],
            'users'          => [
                'array' => 'Не верный формат поля ":attribute".',
            ],
            'product_images' => [
                'array' => 'Не верный формат поля ":attribute".',
            ],
        ];

        return array_merge(parent::messages(), $messages);
    }

    public function attributes(): array
    {
        $attributes = [
            'description'    => 'Описание',
            'content'        => 'Содержание',
            'img'            => 'Изображение',
            'price'          => 'Цена',
            'old_price'      => 'Старая цена',
            'count'          => 'Количество',
            'is_published'   => 'Опубликовано',
            'category_id'    => 'ID категории',
            'tags'           => 'Теги',
            'colors'         => 'Цвета',
            'users'          => 'Пользователи',
            'product_images' => 'Изображения',
        ];

        return array_merge(parent::attributes(), $attributes);
    }

}
