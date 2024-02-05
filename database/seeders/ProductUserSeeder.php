<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\ProductUser;
use Illuminate\Database\Seeder;

class ProductUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductUser::factory(25)->create();
    }
}
