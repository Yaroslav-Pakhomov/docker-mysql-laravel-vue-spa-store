<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\ProductTag;
use Illuminate\Database\Seeder;

class ProductTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductTag::factory(25)->create();
    }
}
