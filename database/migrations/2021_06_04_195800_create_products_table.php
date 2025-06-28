<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 12, 2)->default(0);
            $table->text('description')->nullable();
            $table->decimal('discount', 8, 2)->default(0);
            $table->string('discount_type')->nullable();
            $table->decimal('tax', 8, 2)->default(0);
            $table->string('tax_type')->nullable();
            $table->decimal('unit_price', 12, 2)->default(0);
            $table->decimal('purchase_price', 12, 2)->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
