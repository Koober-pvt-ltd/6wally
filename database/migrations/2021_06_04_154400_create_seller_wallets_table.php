<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('seller_wallets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seller_id');
            $table->decimal('balance', 12, 2)->default(0);
            $table->decimal('withdrawn', 12, 2)->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('seller_wallets');
    }
};
