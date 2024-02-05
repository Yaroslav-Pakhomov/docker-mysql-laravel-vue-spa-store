<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\ColorProduct;
use Illuminate\Database\Seeder;

class ColorProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ColorProduct::factory(50)->create();
    }
}
