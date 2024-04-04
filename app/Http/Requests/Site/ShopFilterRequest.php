<?php

namespace App\Http\Requests\Site;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ShopFilterRequest extends FormRequest
{

    /**
     * С какой сущностью сейчас работаем: категория, бренд, цвет и т.д.
     *
     * @var array
     */
    protected array $entity = [];

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return match ($this->method()) {
            'GET' => $this->indexItem(),
            default => FALSE,
        };
    }

    public function indexItem(): array
    {
        return [
            "categories_checked" => ['nullable', 'array',],
            "colors_checked"     => ['nullable', 'array',],
            "tags_checked"       => ['nullable', 'array',],
            "price_from"         => ['nullable', 'decimal:0,2',],
            "price_to"           => ['nullable', 'decimal:0,2',],
            "sort"               => ['nullable', 'string',],
        ];
    }

    /**
     * Возвращает массив сообщений об ошибках для заданных правил
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'categories_checked' => [
                'array' => 'Поле ":attribute" не корректно.',
            ],
            'colors_checked'     => [
                'array' => 'Поле ":attribute" не корректно.',
            ],
            'tags_checked'       => [
                'array' => 'Поле ":attribute" не корректно.',
            ],
            'price_from'         => [
                'decimal:0,2' => 'Поле ":attribute" д.б. числом.',
            ],
            'price_to'           => [
                'decimal:0,2' => 'Поле ":attribute" д.б. числом.',
            ],
            'sort'               => [
                'string' => 'Поле ":attribute" д.б. строкой.',
            ],
        ];
    }

    /**
     * Возвращает массив дружественных пользователю названий полей
     *
     * @return array
     */
    public function attributes(): array
    {
        return [
            'categories_checked' => 'Категории',
            'colors_checked'     => 'Цвета',
            'tags_checked'       => 'Тэги',
            'price_from'         => 'Цена от',
            'price_to'           => 'Цена от',
            'sort'               => 'Сортировка',
        ];
    }
}
