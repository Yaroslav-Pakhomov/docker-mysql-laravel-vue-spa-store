<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property mixed $slug
 */
class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * Таблица, связанная с моделью.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * Атрибуты, которые нельзя массово присваивать.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Возвращает все категории с пагинацией
     *
     * @return LengthAwarePaginator
     */
    public static function getAllCategoriesAdmin(): LengthAwarePaginator
    {
        return self::query()->orderBy('id', 'desc')->paginate(5);
    }

    /**
     * Возвращает все категории для сайта
     *
     * @return Collection|array
     */
    public static function getAllCategoriesSite(): Collection|array
    {
        return self::query()->orderBy('id', 'desc')->get();
    }

    /**
     * Возвращает товары категории
     *
     * @return HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'category_id', 'id')->orderBy('id', 'desc');
    }

}
