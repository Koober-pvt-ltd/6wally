<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaymentByAndPaymentNotToOrdersTable extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            if (!Schema::hasColumn('orders', 'payment_by')) {
                $table->string('payment_by')->nullable(); // removed after('transaction_ref')
            }

            if (!Schema::hasColumn('orders', 'payment_note')) {
                $table->text('payment_note')->nullable(); // removed after('payment_by')
            }
        });
    }

    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn(['payment_by', 'payment_note']);
        });
    }
}
