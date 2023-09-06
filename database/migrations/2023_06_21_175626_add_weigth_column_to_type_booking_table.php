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
        Schema::table('type_booking', function (Blueprint $table) {
            // Add new column weight enum
            $table->enum('weight', ['3', '5'])->after('name')->default('3');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('type_booking', function (Blueprint $table) {
            // Drop column
            $table->dropColumn('weight');
        });
    }
};
