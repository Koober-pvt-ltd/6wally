<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(); // Foreign key if needed
            $table->string('order_status')->default('pending');
            $table->decimal('order_amount', 12, 2)->default(0);
            $table->decimal('shipping_cost', 12, 2)->default(0);
            $table->decimal('discount', 12, 2)->default(0);
            $table->decimal('tax', 12, 2)->default(0);
            $table->decimal('price', 12, 2)->default(0); // Important for your update migration
            $table->timestamps();
            $table->decimal('discount_amount', 12, 2)->default(0); // 👈 Add this line

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
