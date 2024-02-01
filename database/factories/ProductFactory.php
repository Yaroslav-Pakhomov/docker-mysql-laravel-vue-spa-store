<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Product;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws Exception
     */
    public function definition(): array
    {
        return [
            'title'       => fake()->realText(random_int(25, 30)),
            'slug'        => fake()->unique()->slug(3, FALSE),
            'description' => fake()->realText(random_int(100, 120)),
            'content'     => fake()->realText(random_int(500, 1000)),

            'prev_img' => fake()->imageUrl(600, 200, 'clothes', true),
            'main_img' => fake()->imageUrl(1200, 400, 'clothes', true),

            'old_price' => fake()->randomFloat(2, 50, 100000),
            'price'     => fake()->randomFloat(2, 50, 100000),

            'count' => random_int(1, 150),

            'category_id' => random_int(1, 10),

            'created_at' => fake()->dateTimeBetween('-60 days', '-30 days'),
            'updated_at' => fake()->dateTimeBetween('-20 days', '-1 days'),
        ];
    }
}
