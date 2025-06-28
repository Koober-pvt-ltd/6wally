<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seller_id')->nullable();
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('contact')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();

            $table->foreign('seller_id')->references('id')->on('sellers')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('shops');
    }
};
