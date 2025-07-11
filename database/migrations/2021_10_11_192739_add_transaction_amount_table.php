<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTransactionAmountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('transactions', function (Blueprint $table) {
        if (!Schema::hasColumn('transactions', 'amount')) {
            $table->double('amount', 8, 2)->default(0);
        }
        if (!Schema::hasColumn('transactions', 'transaction_type')) {
            $table->string('transaction_type')->nullable();
        }
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transactions', function (Blueprint $table) {
            //
        });
    }
}
