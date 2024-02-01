<?php

namespace App\Http\Requests\Admin;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
{

    /**
     * С какой сущностью сейчас работаем: категория, бренд, цвет и т.д.
     *
     * @var array
     */
    protected array $entity = [
        'name'  => 'user',
        'table' => 'users',
    ];

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
            'PUT', 'PATCH' => $this->updateItem(),
            default => FALSE,
        };
    }

    /**
     * @return string[]
     */
    public function createItem(): array
    {
        return [
            'name'       => 'required|string|between:3,50',
            'email'      => 'required|string|between:3,100|regex:/^[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}$/i|' . Rule::unique($this->entity['table'], 'email'),
            'password'   => 'required|string|confirmed', // password_confirmation - поле в blade для валидации "confirmed"
            'patronymic' => 'nullable|string|between:3,50',
            'surname'    => 'nullable|string|between:3,50',
            'age'        => 'nullable|integer',
            'address'    => 'nullable|string|between:3,100',
            'gender'     => 'nullable|integer',
        ];
    }

    /**
     * @return string[]
     */
    public function updateItem(): array
    {
        // получаем объект модели из маршрута: admin/entity/{entity}
        $model = $this->route($this->entity['name']);

        return [
            'name'       => 'required|string|between:3,100',
            'email'      => 'required|string|regex:/^[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}$/i|between:3,100|' . Rule::unique($this->entity['table'], 'email')->ignore($model->id), // проверка на уникальность email, исключая эту сущность по идентификатору
            'patronymic' => 'nullable|string|between:3,50',
            'surname'    => 'nullable|string|between:3,50',
            'age'        => 'nullable|integer',
            'address'    => 'nullable|string|between:3,100',
            'gender'     => 'nullable|integer',
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
            'name'       => [
                'required' => 'Поле ":attribute" не заполнено.',
                'string'   => 'Поле ":attribute" д.б. строкой.',
                'between'  => 'Длина строки поля ":attribute" д.б. между :min - :max.',
            ],
            'email'      => [
                'required' => 'Поле ":attribute" не заполнено.',
                'string'   => 'Поле ":attribute" д.б. строкой.',
                'between'  => 'Длина строки поля ":attribute" д.б. между :min - :max.',
                'unique'   => '":attribute" уже существует.',
            ],
            'password'   => [
                'required'  => 'Поле ":attribute" не заполнено.',
                'string'    => 'Поле ":attribute" д.б. строкой.',
                'confirmed' => 'Пароли не совпадают',
                'unique'    => '":attribute" уже существует.',
            ],
            'patronymic' => [
                'string'  => 'Поле ":attribute" д.б. строкой.',
                'between' => 'Длина строки поля ":attribute" д.б. между :min - :max.',
            ],
            'surname'    => [
                'string'  => 'Поле ":attribute" д.б. строкой.',
                'between' => 'Длина строки поля ":attribute" д.б. между :min - :max.',
            ],
            'age'        => [
                'integer' => 'Поле ":attribute" д.б. числом.',
            ],
            'address'    => [
                'string'  => 'Поле ":attribute" д.б. строкой.',
                'between' => 'Длина строки поля ":attribute" д.б. между :min - :max.',
            ],
            'gender'     => [
                'integer' => 'Поле ":attribute" д.б. числом.',
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
            'name'       => 'Имя пользователя',
            'password'   => 'Пароль',
            'email'      => 'Email-адрес',
            'patronymic' => 'Отчество',
            'surname'    => 'Фамилия',
            'age'        => 'Возраст',
            'address'    => 'Адрес',
            'gender'     => 'Пол',
        ];
    }
}
