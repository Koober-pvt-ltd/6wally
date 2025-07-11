<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddFundBonusCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('add_fund_bonus_categories')) {
            Schema::create('add_fund_bonus_categories', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->text('description')->nullable();
                $table->enum('bonus_type', ['percentage', 'flat'])->default('flat'); // safer enum
                $table->decimal('bonus_amount', 14, 2)->default(0);
                $table->decimal('min_add_money_amount', 14, 2)->default(0);
                $table->decimal('max_bonus_amount', 14, 2)->default(0);
                $table->dateTime('start_date_time')->nullable();
                $table->dateTime('end_date_time')->nullable();
                $table->boolean('is_active')->default(0);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_fund_bonus_categories');
    }
}
