<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminWalletHistoriesTable extends Migration
{
    public function up()
    {
        Schema::create('admin_wallet_histories', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount', 20, 6);
            $table->string('type')->nullable();
            $table->string('transaction_type')->nullable();
            $table->string('reference')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('admin_wallet_histories');
    }
}

