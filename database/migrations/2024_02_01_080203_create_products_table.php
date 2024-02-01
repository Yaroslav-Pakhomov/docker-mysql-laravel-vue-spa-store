<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', static function (Blueprint $table) {
            $table->id();

            // Текстовые данные
            $table->string('title', 100);
            $table->string('slug', 100)->unique();
            $table->text('description');
            $table->text('content')->nullable();

            // Изображения
            $table->string('prev_img', 100)->nullable();
            $table->string('main_img', 100)->nullable();

            // Цены
            $table->decimal('price');
            $table->decimal('old_price')->nullable();

            // Кол-во
            $table->integer('count');
            // Публикация
            $table->boolean('is_published')->nullable()->default(true);

            // FK
            $table->foreignId('category_id')->nullable()->constrained('categories')->cascadeOnUpdate()->cascadeOnDelete();

            // IDx
            $table->index('category_id');

            // Мягкое удаление
            $table->softDeletes();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
