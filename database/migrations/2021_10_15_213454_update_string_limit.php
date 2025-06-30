<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateStringLimit extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            if (Schema::hasColumn('orders', 'order_status')) {
                $table->string('order_status', 50)->change();
            }

            if (Schema::hasColumn('orders', 'payment_method')) {
                $table->string('payment_method', 100)->change();
            }

            if (Schema::hasColumn('orders', 'order_amount')) {
                $table->float('order_amount')->change();
            }
        });
    }

    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            if (Schema::hasColumn('orders', 'order_status')) {
                $table->string('order_status')->change();
            }

            if (Schema::hasColumn('orders', 'payment_method')) {
                $table->string('payment_method')->change();
            }

            if (Schema::hasColumn('orders', 'order_amount')) {
                $table->float('order_amount', 8, 2)->change();
            }
        });
    }
}
