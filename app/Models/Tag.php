<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * Таблица, связанная с моделью.
     *
     * @var string
     */
    protected $table = 'tags';

    /**
     * Атрибуты, которые нельзя массово присваивать.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Возвращает все теги для админки
     *
     * @return LengthAwarePaginator
     */
    public static function getAllTagsAdmin(): LengthAwarePaginator
    {
        return self::query()->orderBy('id', 'desc')->paginate(7);
    }

    /**
     * Возвращает все теги для админки
     *
     * @return Collection|array
     */
    public static function getAllTagsSite(): Collection|array
    {
        return self::query()->orderBy('id', 'desc')->get();
    }

    /**
     * Возвращает товары тега
     *
     * @return BelongsToMany
     */
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'product_tags', 'tag_id', 'product_id')->orderBy('id', 'desc');
    }
}
