<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('chattings', function (Blueprint $table) {
           $table->tinyInteger('seen_notification')->nullable()->default(0)->after('status');
           $table->string('notification_receiver', 20)->nullable()->comment('admin, seller, customer, deliveryman')->after('status');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('chattings', function (Blueprint $table) {
            $table->dropColumn('seen_notification');
            $table->dropColumn('notification_receiver');
        });
    }
};
