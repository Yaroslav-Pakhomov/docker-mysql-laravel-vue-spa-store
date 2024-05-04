<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderItem extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * Таблица, связанная с моделью.
     *
     * @var string
     */
    protected $table = 'order_items';

    /**
     * Атрибуты, которые нельзя массово присваивать.
     *
     * @var array
     */
    protected $guarded = [];
}
