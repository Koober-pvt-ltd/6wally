<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('chattings', function (Blueprint $table) {
            if (!Schema::hasColumn('chattings', 'status')) {
                $table->string('status')->nullable()->after('id'); // Add after 'id' or another safe column
            }
        });
    }

    public function down(): void
    {
        Schema::table('chattings', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
