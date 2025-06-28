<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('withdraw_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seller_id');
            $table->decimal('amount', 12, 2);
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('withdraw_requests');
    }
};
