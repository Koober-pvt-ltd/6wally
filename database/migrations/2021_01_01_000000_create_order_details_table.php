<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('qty')->default(1);
            $table->double('price', 8, 2);
            $table->decimal('tax', 8, 2)->default(0); // ✅ Add this line
            $table->decimal('discount', 8, 2)->default(0); // ✅ Required to fix migration


           
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
