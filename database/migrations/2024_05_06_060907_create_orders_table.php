<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', static function (Blueprint $table) {
            $table->id();

            $table->string('company_name');
            $table->string('address')->nullable();
            $table->string('city');
            $table->string('country');
            $table->integer('post_code')->unsigned();

            // FK
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            // IDx
            $table->index('user_id');

            $table->string('surname_fact')->nullable();
            $table->string('name_fact')->nullable();
            $table->string('patronymic_fact')->nullable();
            $table->string('company_name_fact')->nullable();
            $table->string('address_fact')->nullable();
            $table->string('city_fact')->nullable();
            $table->string('country_fact')->nullable();

            $table->integer('post_code_fact')->unsigned()->nullable();

            $table->text('notes')->nullable();

            // Мягкое удаление
            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
