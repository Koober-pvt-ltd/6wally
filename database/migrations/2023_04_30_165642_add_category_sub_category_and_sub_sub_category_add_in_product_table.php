<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategorySubCategoryAndSubSubCategoryAddInProductTable extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            if (!Schema::hasColumn('products', 'category_id')) {
                $table->string('category_id')->nullable(); // removed 'after'
            }

            if (!Schema::hasColumn('products', 'sub_category_id')) {
                $table->string('sub_category_id')->nullable(); // removed 'after'
            }

            if (!Schema::hasColumn('products', 'sub_sub_category_id')) {
                $table->string('sub_sub_category_id')->nullable(); // removed 'after'
            }
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn([
                'category_id',
                'sub_category_id',
                'sub_sub_category_id',
            ]);
        });
    }
}
