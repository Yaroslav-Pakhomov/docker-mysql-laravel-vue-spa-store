<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property mixed $tags
 * @property mixed $colors
 * @property mixed $users
 */
class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * Таблица, связанная с моделью.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * Атрибуты, которые нельзя массово присваивать.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * @return Collection|array
     */
    public static function getAllProducts(): Collection|array
    {
        return self::query()->orderBy('id', 'desc')->get();
    }

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id', 'categories');
    }

    /**
     * @return BelongsToMany
     */
    public function colors(): BelongsToMany
    {
        return $this->belongsToMany(Color::class, 'color_products', 'product_id', 'color_id');
    }

    /**
     * @return BelongsToMany
     */
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'product_tags', 'product_id', 'tag_id');
    }

    /**
     * @return BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'product_users', 'product_id', 'user_id');
    }

    /**
     * @param array   $validated
     * @param Product $product
     *
     * @return Product
     */
    public static function updateProduct(array $validated, Product $product): Product
    {
        $validated['is_published'] = isset($validated['is_published']) && (string)$validated['is_published'] === 'on';
        $product->tags()->sync($validated['tags']);
        $product->colors()->sync($validated['colors']);
        $product->users()->sync($validated['users']);

        unset($validated['tags'], $validated['colors'], $validated['users']);
        if ((int)$validated['category_id'] === 0) {
            unset($validated['category_id'],);
        }

        $product->update($validated);

        return $product;
    }

    /**
     * @param array $validated
     *
     * @return Model
     */
    public static function storeProduct(array $validated): Model
    {
        $validated['is_published'] = isset($validated['is_published']) && (string)$validated['is_published'] === 'on';
        $tags = $validated['tags'];
        $colors = $validated['colors'];
        $users = $validated['users'];

        unset($validated['tags'], $validated['colors'], $validated['users']);
        if ((int)$validated['category_id'] === 0) {
            unset($validated['category_id'],);
        }

        $product = self::query()->updateOrCreate($validated);
        $product->tags()->sync($tags);
        $product->colors()->sync($colors);
        $product->users()->sync($users);

        return $product;
    }
}
