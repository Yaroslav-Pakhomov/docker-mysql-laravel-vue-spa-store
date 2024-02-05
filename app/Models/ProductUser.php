<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductUser extends Model
{
    use HasFactory;

    /**
     * Таблица, связанная с моделью.
     *
     * @var string
     */
    protected $table = 'product_users';

    /**
     * Атрибуты, которые нельзя массово присваивать.
     *
     * @var array
     */
    protected $guarded = [];
}
