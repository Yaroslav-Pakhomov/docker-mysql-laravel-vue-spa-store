<?php

declare(strict_types=1);

namespace App\Http\Requests\Admin;

use App\Http\Requests\AbstractRequest;
use Illuminate\Validation\Rule;

class ColorRequest extends AbstractRequest
{
    /**
     * С какой сущностью сейчас работаем (цвет)
     *
     * @var array
     */
    protected array $entity = [
        'name'  => 'color',
        'table' => 'colors',
    ];

    /**
     * Объединяет дефолтные правила и правила, специфичные для товара
     * для проверки данных при добавлении нового товара
     *
     * @return array
     */
    public function createItem(): array
    {
        $rules = [
            'code' => 'required|string|regex:~^[-_a-f0-9#]+$~i|between:3,7|unique:' . $this->entity['table'] . ',code',
        ];

        return array_merge(parent::createItem(), $rules);
    }

    /**
     * Объединяет дефолтные правила и правила, специфичные для бренда
     * для проверки данных при обновлении существующего бренда
     *
     * @return array
     */
    public function updateItem(): array
    {
        // получаем объект модели из маршрута: admin/entity/{entity}
        $model = $this->route($this->entity['name']);
        $rules = [
            'code' => 'required|string|regex:~^[-_a-f0-9#]+$~i|between:3,7|' . Rule::unique($this->entity['table'], 'code')->ignore($model->id), // проверка на уникальность code, исключая эту сущность по идентификатору
        ];

        return array_merge(parent::updateItem(), $rules);
    }


    /**
     * Возвращает массив сообщений об ошибках для заданных правил
     *
     * @return array
     */
    public function messages(): array
    {
        $messages = [
            'code' => [
                'required' => 'Поле ":attribute" не заполнено.',
                'string'   => 'Поле ":attribute" д.б. строкой.',
                'between'  => 'Длина строки поля ":attribute" д.б. между :min - :max (f00, #f00, ff0000, #ff0000).',
                'unique'   => '":attribute" уже существует.',
                'regex'    => '":attribute" не соответствует формату.',
            ],
        ];

        return array_merge(parent::messages(), $messages);
    }

    /**
     * Возвращает массив дружественных пользователю названий полей
     *
     * @return array
     */
    public function attributes(): array
    {
        $attributes = [
            'code' => 'Код цвета'
        ];

        return array_merge(parent::attributes(), $attributes);
    }

}
