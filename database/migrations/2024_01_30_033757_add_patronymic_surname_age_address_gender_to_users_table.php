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
        Schema::table('users', static function (Blueprint $table) {
            $table->string('patronymic', 50)->after('name')->nullable();
            $table->string('surname', 50)->after('patronymic')->nullable();
            $table->smallInteger('age')->after('password')->nullable();
            $table->string('address', 100)->after('age')->nullable();
            $table->smallInteger('gender')->after('address')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', static function (Blueprint $table) {
            $table->dropColumn('patronymic');
            $table->dropColumn('surname');
            $table->dropColumn('age');
            $table->dropColumn('address');
            $table->dropColumn('gender');
        });
    }
};
