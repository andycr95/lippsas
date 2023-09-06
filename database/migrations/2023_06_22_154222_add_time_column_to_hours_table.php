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
        Schema::table('hours', function (Blueprint $table) {
            // Add the time and date column
            $table->time('time')->nullable();
            $table->date('date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hours', function (Blueprint $table) {
            // Drop the time and date column
            $table->dropColumn('time');
            $table->dropColumn('date');
        });
    }
};
