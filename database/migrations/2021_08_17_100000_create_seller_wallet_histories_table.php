<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellerWalletHistoriesTable extends Migration
{
    public function up()
    {
        Schema::create('seller_wallet_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seller_id');
            $table->decimal('amount', 20, 6);
            $table->string('type')->nullable();
            $table->string('transaction_type')->nullable();
            $table->string('reference')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('seller_wallet_histories');
    }
}
