<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminWalletsTable extends Migration
{
    public function up()
    {
      Schema::create('admin_wallets', function (Blueprint $table) {
    $table->id();
    $table->decimal('balance', 20, 6)->default(0);
    $table->decimal('withdrawn', 20, 6)->default(0); // 👈 ADD THIS LINE
    $table->decimal('total_earning', 20, 6)->default(0);
    $table->decimal('commission_earned', 20, 6)->default(0);
    $table->decimal('delivery_charge_earned', 20, 6)->default(0);
    $table->decimal('pending_amount', 20, 6)->default(0);
    $table->decimal('total_tax_collected', 20, 6)->default(0);
    $table->timestamps();
});


    }

    public function down()
    {
        Schema::dropIfExists('admin_wallets');
    }
}

