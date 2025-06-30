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
        Schema::table('categories', function (Blueprint $table) {
            if (!Schema::hasColumn('categories', 'icon_storage_type')) {
                if (Schema::hasColumn('categories', 'icon')) {
                    $table->string('icon_storage_type', 10)->nullable()->default('public')->after('icon');
                } else {
                    // fallback if 'icon' column doesn't exist
                    $table->string('icon_storage_type', 10)->nullable()->default('public')->after('id');
                }
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            if (Schema::hasColumn('categories', 'icon_storage_type')) {
                $table->dropColumn('icon_storage_type');
            }
        });
    }
};
