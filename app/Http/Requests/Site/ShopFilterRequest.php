<?php

namespace App\Http\Requests\Site;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Validation\Rule;
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
            // 'POST' => $this->createItem(),
            // 'PUT', 'PATCH' => $this->updateItem(),
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
        ];
    }

    /**
     * @return string[]
     */
    // public function createItem(): array
    // {
    //     return [
    //         'title' => 'required|string|between:3,100|unique:' . $this->entity['table'] . ',title',
    //         'slug'  => 'required|string|between:3,100|regex:~^[-_a-z0-9]+$~i|unique:' . $this->entity['table'] . ',slug',
    //     ];
    // }
    //
    /**
     * @return string[]
     */
    // public function updateItem(): array
    // {
    //     // получаем объект модели из маршрута: admin/entity/{entity}
    //     $model = $this->route($this->entity['name']);
    //
    //     return [
    //         'title' => 'required|string|between:3,100|' . Rule::unique($this->entity['table'], 'title')->ignore($model->id),
    //         'slug'  => 'required|string|regex:~^[-_a-z0-9]+$~i|between:3,100|' . Rule::unique($this->entity['table'], 'slug')->ignore($model->id), // проверка на уникальность slug, исключая эту сущность по идентификатору
    //     ];
    // }

    /**
     * Возвращает массив сообщений об ошибках для заданных правил
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'title' => [
                'required' => 'Поле ":attribute" не заполнено.',
                'string'   => 'Поле ":attribute" д.б. строкой.',
                'between'  => 'Длина строки поля ":attribute" д.б. между :min - :max.',
                'unique'   => '":attribute" уже существует.',
            ],
            'slug'  => [
                'required' => 'Поле ":attribute" не заполнено.',
                'string'   => 'Поле ":attribute" д.б. строкой.',
                'between'  => 'Длина строки поля ":attribute" д.б. между :min - :max.',
                'unique'   => '":attribute" уже существует.',
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
            'title' => 'Наименование',
            'slug'  => 'ЧПУ (англ.)',
        ];
    }
}
