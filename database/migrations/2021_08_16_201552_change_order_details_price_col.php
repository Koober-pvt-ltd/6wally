<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        // Modify the order_details table conditionally
        Schema::table('order_details', function (Blueprint $table) {
            if (!Schema::hasColumn('order_details', 'tax')) {
                $table->decimal('tax', 8, 2)->default(0);
            }

            if (!Schema::hasColumn('order_details', 'discount')) {
                $table->decimal('discount', 8, 2)->default(0);
            }
        });
    }

    public function down()
    {
        // Drop columns if they exist
        Schema::table('order_details', function (Blueprint $table) {
            if (Schema::hasColumn('order_details', 'tax')) {
                $table->dropColumn('tax');
            }

            if (Schema::hasColumn('order_details', 'discount')) {
                $table->dropColumn('discount');
            }
        });
    }
};
