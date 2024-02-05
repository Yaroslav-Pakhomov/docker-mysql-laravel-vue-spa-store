<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\ColorProduct;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ColorProduct>
 */
class ColorProductFactory extends Factory
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
            'color_id'   => random_int(1, 15),
            'product_id' => random_int(1, 150),

            'created_at' => fake()->dateTimeBetween('-60 days', '-30 days'),
            'updated_at' => fake()->dateTimeBetween('-20 days', '-1 days'),
        ];
    }
}
