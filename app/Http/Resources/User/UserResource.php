<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


/**
 * @property mixed $name
 * @property mixed $patronymic
 * @property mixed $surname
 * @property mixed $email
 * @property mixed $age
 * @property mixed $address
 * @property mixed $gender
 */
class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name'       => $this->name,
            'patronymic' => $this->patronymic,
            'surname'    => $this->surname,
            'email'      => $this->email,
            'age'        => $this->age,
            'address'    => $this->address,
            'gender'     => $this->gender === 0 ? 'не указан' : ($this->gender === 1 ? 'М' : 'Ж'),
        ];
        // return parent::toArray($request);
    }
}
