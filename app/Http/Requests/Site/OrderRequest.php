<?php

namespace App\Http\Requests\Site;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'POST' => $this->createItem(),
            default => FALSE,
        };
    }

    public function createItem(): array
    {
        return [
            'cart_products'         => ['required', 'array',],
            'email'                 => ['required', 'string',],
            'surname'               => ['nullable', 'string',],
            'name'                  => ['nullable', 'string',],
            'patronymic'            => ['nullable', 'string',],
            'company_name'          => ['nullable', 'string',],
            'address'               => ['nullable', 'string',],
            'apartment'             => ['nullable', 'string',],
            'city'                  => ['nullable', 'string',],
            'selected_country'      => ['nullable', 'string',],
            'post_code'             => ['nullable', 'integer',],
            'surname_fact'          => ['nullable', 'string',],
            'name_fact'             => ['nullable', 'string',],
            'patronymic_fact'       => ['nullable', 'string',],
            'company_name_fact'     => ['nullable', 'string',],
            'address_fact'          => ['nullable', 'string',],
            'apartment_fact'        => ['nullable', 'string',],
            'city_fact'             => ['nullable', 'string',],
            'selected_country_fact' => ['nullable', 'string',],
            'post_code_fact'        => ['nullable', 'integer',],
            'notes'                 => ['nullable', 'string',],
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
            'cart_products'         => [
                'array' => 'Поле ":attribute" не корректно.',
            ],
            'email'                 => [
                'string' => 'Поле ":attribute" д.б. строкой.',
            ],
            'surname'               => [
                'string' => 'Поле ":attribute" д.б. строкой.',
            ],
            'name'                  => [
                'string' => 'Поле ":attribute" д.б. строкой.',
            ],
            'patronymic'            => [
                'string' => 'Поле ":attribute" д.б. строкой.',
            ],
            'company_name'          => [
                'string' => 'Поле ":attribute" д.б. строкой.',
            ],
            'address'               => [
                'string' => 'Поле ":attribute" д.б. строкой.',
            ],
            'apartment'             => [
                'string' => 'Поле ":attribute" д.б. строкой.',
            ],
            'city'                  => [
                'string' => 'Поле ":attribute" д.б. строкой.',
            ],
            'selected_country'      => [
                'string' => 'Поле ":attribute" д.б. строкой.',
            ],
            'post_code'             => [
                'integer' => 'Поле ":attribute" д.б. числом.',
            ],
            'surname_fact'          => [
                'string' => 'Поле ":attribute" д.б. строкой.',
            ],
            'name_fact'             => [
                'string' => 'Поле ":attribute" д.б. строкой.',
            ],
            'patronymic_fact'       => [
                'string' => 'Поле ":attribute" д.б. строкой.',
            ],
            'company_name_fact'     => [
                'string' => 'Поле ":attribute" д.б. строкой.',
            ],
            'address_fact'          => [
                'string' => 'Поле ":attribute" д.б. строкой.',
            ],
            'apartment_fact'        => [
                'string' => 'Поле ":attribute" д.б. строкой.',
            ],
            'city_fact'             => [
                'string' => 'Поле ":attribute" д.б. строкой.',
            ],
            'selected_country_fact' => [
                'string' => 'Поле ":attribute" д.б. строкой.',
            ],
            'post_code_fact'        => [
                'integer' => 'Поле ":attribute" д.б. числом.',
            ],
            'notes'                 => [
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
            'cart_products'         => 'Выбранные товары',
            'email'                 => 'Почта',
            'surname'               => 'Фамилия',
            'name'                  => 'Имя',
            'patronymic'            => 'Отчество',
            'company_name'          => 'Название компании',
            'address'               => 'Адрес',
            'apartment'             => 'Кв',
            'city'                  => 'Город',
            'selected_country'      => 'Страна',
            'post_code'             => 'Почтовый Индекс',
            'surname_fact'          => 'Фамилия (факт)',
            'name_fact'             => 'Имя (факт)',
            'patronymic_fact'       => 'Отчество (факт)',
            'company_name_fact'     => 'Название компании (факт)',
            'address_fact'          => 'Адрес (факт)',
            'apartment_fact'        => 'Кв (факт)',
            'city_fact'             => 'Город (факт)',
            'selected_country_fact' => 'Страна (факт)',
            'post_code_fact'        => 'Почтовый Индекс (факт)',
            'notes'                 => 'Комментарий к заказу',
        ];
    }
}
