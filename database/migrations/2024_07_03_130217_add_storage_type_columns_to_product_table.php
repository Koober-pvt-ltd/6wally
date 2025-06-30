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
        Schema::table('products', function (Blueprint $table) {
            // Check before adding to prevent errors if the target column for `after()` doesn't exist
            if (Schema::hasColumn('products', 'thumbnail')) {
                $table->string('thumbnail_storage_type', 10)->nullable()->default('public')->after('thumbnail');
            } else {
                // Fallback if 'thumbnail' column doesn't exist
                $table->string('thumbnail_storage_type', 10)->nullable()->default('public')->after('id');
            }

            if (Schema::hasColumn('products', 'digital_file_ready')) {
                $table->string('digital_file_ready_storage_type', 10)->nullable()->default('public')->after('digital_file_ready');
            } else {
                // Fallback if 'digital_file_ready' column doesn't exist
                $table->string('digital_file_ready_storage_type', 10)->nullable()->default('public')->after('thumbnail_storage_type');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            if (Schema::hasColumn('products', 'thumbnail_storage_type')) {
                $table->dropColumn('thumbnail_storage_type');
            }

            if (Schema::hasColumn('products', 'digital_file_ready_storage_type')) {
                $table->dropColumn('digital_file_ready_storage_type');
            }
        });
    }
};
