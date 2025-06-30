<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColToAdminWallet extends Migration
{
    public function up()
    {
        Schema::table('admin_wallets', function (Blueprint $table) {
            if (!Schema::hasColumn('admin_wallets', 'commission_earned')) {
                $table->float('commission_earned')->default(0);
            }
            if (!Schema::hasColumn('admin_wallets', 'inhouse_sell')) {
                $table->float('inhouse_sell')->default(0);
            }
            if (!Schema::hasColumn('admin_wallets', 'delivery_charge_earned')) {
                $table->float('delivery_charge_earned')->default(0);
            }
            if (!Schema::hasColumn('admin_wallets', 'pending_amount')) {
                $table->float('pending_amount')->default(0);
            }
        });
    }

    public function down()
    {
        Schema::table('admin_wallets', function (Blueprint $table) {
            // Optional: You can add logic to drop columns here if needed
            // $table->dropColumn(['commission_earned', 'inhouse_sell', 'delivery_charge_earned', 'pending_amount']);
        });
    }
}
