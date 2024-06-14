<?php

namespace App\Http\Requests\Admin;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
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
            'GET' => $this->getSearch(),
            default => FALSE,
        };
    }

    public function getSearch(): array
    {
        return [
            "search_value" => ['nullable', 'string',],
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
            'search_value' => [
                'required' => 'Поле ":attribute" д.б. заполнено.',
                'string'   => 'Поле ":attribute" д.б. строкой.',
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
            'search_value' => 'Поиск',
        ];
    }
}
