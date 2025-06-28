<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('symbol')->nullable();
            $table->string('code')->unique();
            $table->decimal('exchange_rate', 12, 6)->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('currencies');
    }
};
