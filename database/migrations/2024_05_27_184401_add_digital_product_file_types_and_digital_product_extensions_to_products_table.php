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
        if (!Schema::hasColumn('products', 'digital_product_file_types')) {
            $table->longText('digital_product_file_types')->nullable()->after('name'); // or any valid existing column
        }
        if (!Schema::hasColumn('products', 'digital_product_extensions')) {
            $table->longText('digital_product_extensions')->nullable()->after('digital_product_file_types');
        }
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('digital_product_file_types');
            $table->dropColumn('digital_product_extensions');
        });
    }
};
