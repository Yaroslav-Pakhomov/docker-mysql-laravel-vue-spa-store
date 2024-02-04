<?php

declare(strict_types=1);

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name'     => 'Admin',
            'email'    => 'admin@example.com',
            'password' => 'admin',
        ]);

        User::factory(10)->create();
        $this->command->info('Таблица с пользователями загружена данными!');

        $this->call(CategorySeeder::class);
        $this->command->info('Таблица с категориями загружена данными!');

        $this->call(TagSeeder::class);
        $this->command->info('Таблица с тегами загружена данными!');

        $this->call(ColorSeeder::class);
        $this->command->info('Таблица с цветами загружена данными!');

        $this->call(ProductSeeder::class);
        $this->command->info('Таблица с товарами загружена данными!');

        $this->call(ColorProductSeeder::class);
        $this->command->info('Таблица отношений товара и цветов загружена данными!');

        $this->call(ProductTagSeeder::class);
        $this->command->info('Таблица отношений товара и тегов загружена данными!');

        $this->call(ProductUserSeeder::class);
        $this->command->info('Таблица отношений товара и пользователей загружена данными!');
    }
}
